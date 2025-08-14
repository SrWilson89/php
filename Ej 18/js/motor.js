var palabras=['hola','buenos','dias'];
mitexto = palabras.toString();
document.write(`cadena de texto ${mitexto}<br>`);
document.write(`mi array ${palabras}<br>`);

var verduras=['Lechuga', 'Espinacas'];
var dulces=['Chocolate', 'Bombones'];
var limpieza=['Fregona'];
var listaCompra=verduras.concat(dulces, limpieza);
document.write(`<br>Lista de la compra: ${listaCompra}<br>`);

var nombres=['Luis','Juan','Manolo','Alejandra','Lucia','Marisa','Alejandra'];

var numeroin=nombres.indexOf('Alejandra');
document.write(`<br>Alejandra es el numero: ${numeroin} <br>`);

var numerolast=nombres.lastIndexOf('Alejandra');
document.write(`Alejandra es el numero: ${numerolast} <br>`);

var numeros=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36];
document.write(`<br>${numeros}<br>`);
numeros.reverse();
document.write(`${numeros}<br>`);

function vuelta(){
    numeros.reverse()
}

vuelta();
document.write(`${numeros}<br>`);
vuelta();
document.write(`${numeros}<br>`);

var textonumero=numeros.join(" -uwu- ")
document.write(`<br>${textonumero}<br>`);

var ciudades=['Madrid' , 'Barcelona', 'Valencia', 'Toledo', 'San Xenxo', 'Avila'];
document.write(`<br>${ciudades}<br>`);
ciudades.sort();
document.write(`${ciudades}<br>`);
ciudades.reverse();
document.write(`${ciudades}<br>`);

function comprarar(elem1, elem2){
    if(elem1==elem2){
        return 0;
    }
    if(elem1<elem2){
        return -1;
    }
    if(elem1>elem2){
        return 1;
    }
}

var numericos =[45,25,6,13,25,22,1];
numericos.sort();
document.write(`<br>${numericos}<br>`);
numericos.sort(comprarar);
document.write(`${numericos}<br>`);

var numericos2 =['Madrid' , 'Barcelona', 'Valencia', 'Toledo', 'San Xenxo', 'Avila', 'Zamora'];
var selector=numericos2.slice(2,6)
document.write(`<br>${selector}<br>`);

var notas=['do','re','mi','fa','sol','la','si'];
document.write(`<br>${notas}<br>`);
notas.splice(0,2);
document.write(`${notas}<br>`);
notas.splice(0,0,'do','re');
document.write(`${notas}<br>`);
notas.splice(notas.length-2,notas.length,'do','re','mi','fa','sol','la','si');
document.write(`${notas}<br>`);

var notas2=['do','re','mi','fa','sol','la','si'];
document.write(`<br>${notas2}<br>`);
notas2.pop();
document.write(`${notas2}<br>`);
notas2.push('si','do+','re+');
document.write(`${notas2}<br>`);
notas2.shift();
document.write(`${notas2}<br>`);
notas2.unshift('la-','si-','do');
document.write(`${notas2}<br>`);

