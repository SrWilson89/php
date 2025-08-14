function mostrarModal(){
    document.getElementById('myModal').style.display="flex";
}

function cerrarModal(){
    document.getElementById('myModal').style="display:none";
}

productos=new Array();
cesta=new Array();

productos=[
    {
        Nombre:"Paracetamol",
        size:"24 comprimidos",
        detalle:"Pastillita de alegria",
        foto:"img/para.jpg",
        precio:1.50
    },
    {
        Nombre:"Rinealer",
        size:"24 comprimidos",
        detalle:"La alegria de la nariz",
        foto:"img/rine.jpg",
        precio:1.20
    }

]

pintar();

function pintar(){
    document.getElementById('productos').innerHTML="";

    for(x=0; x<productos.length; x++){
        document.getElementById('productos').innerHTML+=`
        <div onclick="addCesta(${x})" class="producto">
            <img src="${productos[x].foto}" alt="">
            
            
                <p>${productos[x].Nombre} ${productos[x].precio} €</p>
                <p>${productos[x].detalle} ${productos[x].size}</p>
                       
        </div>
        `
    }
}

function addCesta(posicion){
    cesta.push(productos[posicion])
    // IMPORTANTE PARA QUE LOS OBJETOS CARGUER MEJOR Y MAS RAPIDO
    pintarVentas();
}

function pintarVentas(){
    document.getElementById('venta').innerHTML="";
    costo=0;
    for(x=0; x<cesta.length; x++){
        document.getElementById('venta').innerHTML+=`
        <div class="venta">
        <img src="${cesta[x].foto}" alt="">
            <div class="datos">
                ${cesta[x].Nombre} ${cesta[x].precio} €
                ${cesta[x].detalle} ${cesta[x].size}
            </div>  
        </div>
        `
        costo+=cesta[x].precio
    }

    total=parseFloat(costo)
    iva=((total*21)/100)
    iva2=parseFloat(iva)
    totalIva=(total+iva2)
    totalIva2=parseFloat(totalIva)

    document.getElementById('venta').innerHTML+=`
    <div class="total">
        <p> Precio sin IVA: ${total} € </p>
        <p> IVA: ${iva2} € </p>
        <p> Total: ${totalIva2} € </p>
    </div>
    `

    
}