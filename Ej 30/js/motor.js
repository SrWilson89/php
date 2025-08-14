listaDeHoy= new Array();

listaDeHoy.push(new Usuario("Juan","Cruz Luna",48,"hombre"));
listaDeHoy.push(new Usuario("Pepe","Cruz Luna",48,"hombre"));
listaDeHoy.push(new Usuario("Alicia","Cruz Luna",48,"mujer"));
listaDeHoy.push(new Usuario("Roberta","Cruz Luna",48,"mujer"));

valor_alcohol0=listaDeHoy[0].tasa(4,90);
valor_alcohol1=listaDeHoy[1].tasa(18,120);
valor_alcohol2=listaDeHoy[2].tasa(2,45);
valor_alcohol3=listaDeHoy[3].tasa(5,45);

for(var x=0 ; x<listaDeHoy.length; x++){
    document.write(`
    ${listaDeHoy[x].nombre} Tu tasa de alccohol es: ${listaDeHoy[x].tasa(12,90)} <br>
    `);
}

document.write(`<br>
    ${listaDeHoy[0].nombre} Tu tasa de alccohol es: ${valor_alcohol0} <br>
    ${listaDeHoy[1].nombre} Tu tasa de alccohol es: ${valor_alcohol1} <br>
    ${listaDeHoy[2].nombre} Tu tasa de alccohol es: ${valor_alcohol2} <br>
    ${listaDeHoy[3].nombre} Tu tasa de alccohol es: ${valor_alcohol3} <br>
    `);



