comprados=new Array();

function cargaDatos(){
    if (localStorage.getItem('MysProductos')){

        comprados=JSON.parse(localStorage.getItem('MysProductos'));
        pintarVentas();
    }
}


function eliminar(posicion){
    alert(`Eliminaste el producto ${comprados[posicion].nombre} con un valor de ${comprados[posicion].precio} €`)
    comprados.splice(posicion,1);
    localStorage.setItem('MysProductos',JSON.stringify(comprados));    
    pintarVentas();
}

cargaDatos();

function pintarVentas(){

    document.getElementById(`contenedor`).innerHTML="";

    total=0;
    iva=0;

    for(x=0; x<comprados.length;x++){
        document.getElementById(`contenedor`).innerHTML+=`
        <div class="fila">
            <img src="${comprados[x].imagen}" alt="${comprados[x].nombre}" tabindex="0">
            <p tabindex="0">${comprados[x].precio} €</p>
            <p tabindex="0">${comprados[x].nombre}</p>
            <button onclick="eliminar(${x})">Eliminar</button>
        </div>`;

        total+=comprados[x].precio
    }

    Mtotal=parseFloat(total).toFixed(2)

    iva=total*0.21
    Miva=parseFloat(iva).toFixed(2)

    totalf=total+iva
    Mtotalf=parseFloat(totalf).toFixed(2)


    document.getElementById(`contenedor`).innerHTML+=`
        <div class="total">
            <p tabindex="0">Total de los productos = ${Mtotal} €</p>
            <p tabindex="0">IVA = ${Miva} €</p>
            <p tabindex="0">Total de los productos = ${Mtotalf} €</p>           
        </div>
    `;
}

pintarVentas();