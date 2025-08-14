productos=[
    {
        imagen:"img/figura01.jpg",
        precio:20,
        nombre:"TRUNKS DEL FUTURO S.S."
    },
    {
        imagen:"img/figura02.jpg",
        precio:20,
        nombre:"GOKU S.S. BLUE"
    },
    {
        imagen:"img/figura03.jpg",
        precio:20,
        nombre:"GOKU BLACK ROSE"
    }
]

comprados=new Array();

function pintar(){

    document.getElementById(`der`).innerHTML="";

    for(x=0; x<productos.length;x++){
        document.getElementById(`der`).innerHTML+=`
        <div class="cajita">
            <img src="${productos[x].imagen}" alt="${productos[x].nombre}" tabindex="0">
            <p tabindex="0">${productos[x].precio} €</p>
            <p tabindex="0">${productos[x].nombre}</p>
            <button onclick="add(${x})">Comprar</button>
        </div>`;
    }
}

pintar();

function add(posicion){

    comprados.push(productos[posicion])
    // IMPORTANTE PARA QUE LOS OBJETOS CARGUER MEJOR Y MAS RAPIDO
    localStorage.setItem('MysProductos',JSON.stringify(comprados));

    alert(`Compraste el producto ${productos[posicion].nombre} con un valor de ${productos[posicion].precio} €`)
}

function cargaDatos(){
    if (localStorage.getItem('MysProductos')){

        comprados=JSON.parse(localStorage.getItem('MysProductos'));
        
    }
}

cargaDatos()