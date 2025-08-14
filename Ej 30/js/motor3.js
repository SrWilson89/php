miTienda=[
    {
        nombre:"Pantalon pitillo",
        material:"Vaquero",
        precioA:8,
        pvp:20,
        cantidad:10
    },
    {
        nombre:"Pantalon Campana",
        material:"Vaquero",
        precioA:8,
        pvp:25,
        cantidad:10
    },
    {
        nombre:"Camisa hawaiana",
        material:"Lino",
        precioA:6,
        pvp:20,
        cantidad:10
    },
    {
        nombre:"Camisa de vestir",
        material:"Lino",
        precioA:7,
        pvp:30,
        cantidad:15
    }
]
cantidadT()
veneficio()

function cantidadT(){
    cantidadTotal=0;

    for(x=0; x<miTienda.length;x++){
        cantidadTotal+=miTienda[x].cantidad
    }

    document.write(`${cantidadTotal}<br>`);
}

function veneficio(){
    totalGanado=0;

    for(x=0; x<miTienda.length;x++){
        beneficio=miTienda[x].pvp-miTienda[x].precioA;
        gananciaT=beneficio*miTienda[x].cantidad;
        totalGanado+=gananciaT

        document.write(`Con ${miTienda[x].nombre} gano por cada prenda ${beneficio}€ 
        y en total ${gananciaT}€<br>`);
    }

    document.write(totalGanado)

    
}

