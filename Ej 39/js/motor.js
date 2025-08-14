var menuPizzas=[
    {
        nombre:"Cuatro Quesos",
        precioPequeña:5,
        precioMediana:7,
        precioGrande:12,
        imagen:"img/pizza1.jpg"
    },
    {
        nombre:"Cinco Quesos",
        precioPequeña:5,
        precioMediana:7,
        precioGrande:12,
        imagen:"img/pizza2.jpg"
    },
    {
        nombre:"Diabla",
        precioPequeña:5,
        precioMediana:7,
        precioGrande:12,
        imagen:"img/pizza3.jpg"
    },
    {
        nombre:"Cuatro Estaciones",
        precioPequeña:5,
        precioMediana:7,
        precioGrande:12,
        imagen:"img/pizza4.jpg"
    },
    {
        nombre:"Hawaiana",
        precioPequeña:5,
        precioMediana:7,
        precioGrande:12,
        imagen:"img/pizza5.jpg"
    },
    {
        nombre:"Romeria",
        precioPequeña:5,
        precioMediana:7,
        precioGrande:12,
        imagen:"img/pizza6.jpg"
    },
    {
        nombre:"Barbacoa",
        precioPequeña:5,
        precioMediana:7,
        precioGrande:12,
        imagen:"img/pizza7.jpg"
    },
    {
        nombre:"Serrana",
        precioPequeña:5,
        precioMediana:7,
        precioGrande:12,
        imagen:"img/pizza8.jpg"
    }
];

var carrito=[];

pintar();

function pintar(){
    pizzas=document.getElementById('izq');
    pizzas.innerHTML="";

    for(x=0;x<menuPizzas.length;x++){

        pizzas.innerHTML+=`
        <div class="menu">
            <img src="${menuPizzas[x].imagen}" alt="">
            <h2>${menuPizzas[x].nombre}</h2>
            <div class="pedido">
                <div onclick="menos(${x})"><img src="img/Componente 1 – 1.png" alt=""></div>
                <p id="cantidad${x}">0</p>
                <div onclick="mas(${x})"><img src="img/Componente 2 – 1.png" alt=""></div>
            </div>
            <div class="Tamaño">
                <div onclick="tamanoP(${x})">
                    <input type="radio" name="tamaño${x}" id="Pequeña${x}">
                    <label for="Pequeña${x}">Pequeña</label>
                </div>

                <div onclick="tamanoM(${x})">
                <input type="radio" name="tamaño${x}" id="Mediana${x}" checked>
                <label for="Mediana${x}">Mediana</label>
                </div>

                <div onclick="tamanoG(${x})">
                <input type="radio" name="tamaño${x}" id="Grande${x}">
                <label for="Grande${x}">Grande</label>
                </div>

            </div>
            <p id="precio${x}">Precio : 0 €</p>
            <button onclick="comprar(${x})">Comprar</button>
        </div>`
    }

}

function tamanoP(x){
    precio=document.getElementById(`precio${x}`);
    precio.innerHTML="";
    precio.innerHTML=`Precio : ${menuPizzas[x].precioPequeña} €`

    let valor = parseInt(document.getElementById(`cantidad${x}`).innerHTML);
    if(valor<1){
    valor++;
    document.getElementById(`cantidad${x}`).innerHTML=`${valor}`
    }
}

function tamanoM(x){
    precio=document.getElementById(`precio${x}`);
    precio.innerHTML="";
    precio.innerHTML=`Precio : ${menuPizzas[x].precioMediana} €`

    let valor = parseInt(document.getElementById(`cantidad${x}`).innerHTML);
    if(valor<1){
    valor++;
    document.getElementById(`cantidad${x}`).innerHTML=`${valor}`
    }
}

function tamanoG(x){
    precio=document.getElementById(`precio${x}`);
    precio.innerHTML="";
    precio.innerHTML=`Precio : ${menuPizzas[x].precioGrande} €`

    let valor = parseInt(document.getElementById(`cantidad${x}`).innerHTML);
    if(valor<1){
    valor++;
    document.getElementById(`cantidad${x}`).innerHTML=`${valor}`
    }
}

function menos(x){
    let valor = parseInt(document.getElementById(`cantidad${x}`).innerHTML);
    if(!valor<=0){
        valor--;
        document.getElementById(`cantidad${x}`).innerHTML=`${valor}`
    }else{
        alert("No puedes pedir menos de 0")
    }

    pequeño=document.getElementById(`Pequeña${x}`).checked;
    mediana=document.getElementById(`Mediana${x}`).checked;
    grande=document.getElementById(`Grande${x}`).checked;

    if(pequeño == true){
        tamanoP(x);
    }else if(mediana == true){
        tamanoM(x);
    }else{
        tamanoG(x);
    }
}

function mas(x){
    let valor = parseInt(document.getElementById(`cantidad${x}`).innerHTML);

    if(valor<10){
    valor++;
    document.getElementById(`cantidad${x}`).innerHTML=`${valor}`
    }else{
        alert("El limite de pizzas son 10")
    }

    pequeño=document.getElementById(`Pequeña${x}`).checked;
    mediana=document.getElementById(`Mediana${x}`).checked;
    grande=document.getElementById(`Grande${x}`).checked;

    if(pequeño == true){
        tamanoP(x);
    }else if(mediana == true){
        tamanoM(x);
    }else{
        tamanoG(x);
    }
}

function comprar(x){
    cantidad=parseInt(document.getElementById(`cantidad${x}`).innerHTML);

    if(cantidad>0){
        pequeño=document.getElementById(`Pequeña${x}`).checked;
        mediana=document.getElementById(`Mediana${x}`).checked;
        grande=document.getElementById(`Grande${x}`).checked;

        if(pequeño == true){
            tamaño=menuPizzas[x].precioPequeña;
            tamañoTxt="Pequeña";
        }else if(mediana == true){
            tamaño=menuPizzas[x].precioMediana;
            tamañoTxt="Mediana";
        }else{
            tamaño=menuPizzas[x].precioGrande;
            tamañoTxt="Grande";
        }

        total=cantidad*tamaño

        if(carrito.length<0){
            carrito.push({
                nombre:menuPizzas[x].nombre,
                imagen:menuPizzas[x].imagen,
                size:tamañoTxt,
                cantidad:cantidad,
                total:total
            });
        }else{
            tamañoE=tamañoTxt
            nombreE=menuPizzas[x].nombre
            cantidadE=cantidad
            tamañoETotal=tamaño
            imagenE=menuPizzas[x].imagen

            for(x=0;x<carrito.length;x++){
                if(carrito[x].nombre===nombreE && carrito[x].size===tamañoE){
                    cantidadE=carrito[x].cantidad+cantidad
                    carrito.splice(x,1)
                }
            }
            totalE=cantidadE*tamañoETotal

            carrito.push({
                nombre:nombreE,
                imagen:imagenE,
                size:tamañoE,
                cantidad:cantidadE,
                total:totalE
            });
        }

        pintarCarrito();
    }
}

function pintarCarrito(){
    carritoG=document.getElementById('der');
    carritoG.innerHTML="";
    total=0;

    carritoG.innerHTML+=`<div class="total">Total de pizzas: ${carrito.length}</div>`
    for(x=0;x<carrito.length;x++){
        carritoG.innerHTML+=`
        <div class="lineal">
            <img src="${carrito[x].imagen}" alt="">
            <div>
                <h2>${carrito[x].nombre}</h2>
                <p>Tamaño: ${carrito[x].size}</p>
                <p>Cantidad: ${carrito[x].cantidad}</p>
                <p>Total: ${carrito[x].total} €</p>
                <button onclick="borrar(${x})">Eliminar</button>
            </div>
        </div>`
        total+=carrito[x].total;
    }

    carritoG.innerHTML+=`<div class="total">Total: ${total} €</div>`
}

function borrar(x){
    carrito.splice(x,1);
    pintarCarrito();
}