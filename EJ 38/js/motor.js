var peliculas=[];
var carrito=[];

peliculas.push(new Pelicula("Saw Espiral","2021","SawEspiral.jfif",17.55));
peliculas.push(new Pelicula("Alvin y las Ardillas","2007","Alvin y las Ardillas.jpg",12));
peliculas.push(new Pelicula("Pulp fiction","1994","Pulpfictionposter.jpg",10));

init();

function pintar(){
    pelis=document.getElementById('peliculas');
    pelis.innerHTML="";

    for(x=0;x<peliculas.length;x++){
        pelis.innerHTML+=`
        <div class="portada">
            <img src="img/${peliculas[x].portada}" alt="">
            <h2>${peliculas[x].titulo}</h2>
            <p>Año: ${peliculas[x].anio}</p>
            <p>Precio : ${peliculas[x].precio} €</p>
            <button onclick="comprar(${x})">Añadir al carrito</button>
        </div>`
    }
}

function comprar(x){
    carrito.push(peliculas[x]);
    guardar();
    pintarModal();
    actuCarrito()
}

function mostrarCarrito(){
    modal= document.getElementsByClassName('modal-container');

    modal[0].style = "visibility: visible";
}

function cerrarCarrito(){
    modal= document.getElementsByClassName('modal-container');

    modal[0].style = "visibility: hidden";
}

function pintarModal(){
    pelis=document.getElementById('carrito');
    pelis.innerHTML="";
    totalpelis=0;

    pelis.innerHTML+=`<div class="cerrar" onclick="cerrarCarrito()">X</div>`;
    for(x=0;x<carrito.length;x++){
        pelis.innerHTML+=`
        <div class="lineal">
            <img src="img/${carrito[x].portada}" alt="">
            <div>
                <h3>${carrito[x].titulo}</h3>
                <p>Año: ${carrito[x].anio}</p>
                <p>Precio : ${carrito[x].precio} €</p>
            </div>
            <button onclick="borrar(${x})">Eliminar</button>
        </div>`
        totalpelis+=carrito[x].precio;
    }

    totalpelis2 =parseFloat(totalpelis).toFixed(2);

    pelis.innerHTML+=`
    <div class="total">
        Total :${totalpelis2} €
    </div>
    `;
}

function borrar(x){
    carrito.splice(x,1);
    pintarModal();
    actuCarrito()
    guardar();
}

function guardar(){
    localStorage.setItem('MysPeliculas',JSON.stringify(carrito));
}

function cargar(){
    car= localStorage.getItem('MysPeliculas');
    if(car){
        carrito=JSON.parse(car);
    }
}

function init(){
    cargar();
    pintarModal();
    pintar();
    actuCarrito()
}

function actuCarrito(){
    bt = document.getElementById('cantidad')
    bt.innerHTML =carrito.length
}

function mostrarFormulario(){
    modal= document.getElementsByClassName('modal-container2');

    modal[0].style = "visibility: visible";
}

function cerrarFormulario(){
    modal= document.getElementsByClassName('modal-container2');

    modal[0].style = "visibility: hidden";
}
