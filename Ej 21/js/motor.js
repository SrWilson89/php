function cuadraro (elem, indice, numeros){
    return numeros[indice]=elem*elem;
}

var numeros=[1,3,5,7];
numeros.forEach(cuadraro);
document.write(`${numeros} <br>`);

var valores=[1,3,5,7];

document.write(`<br> ${valores} <br>`);

misvalores=valores.map(cuadraro);
document.write(`${valores} <br>`);//hace algo raro

document.write(`${misvalores} <br>`);

function iva(elem, indice, array){
    return array [indice]=elem*0.21;
}

var precios=[10,30,50,70];
document.write(`<br> ${precios} <br>`);

misprecios=precios.map(iva);

document.write(`${misprecios} <br>`);

function mayorCero(elem, indice, array){
    if (elem>0){
        return true
    }else{
        return false
    }
}

var datos=[-2,0,1,8,28]

r=datos.filter(mayorCero);
document.write(`<br> ${r} <br>`);

re=datos.every(mayorCero);
document.write(`${r} <br>`);

rdatos=datos.find(num => num==8);

document.write(`${rdatos} <br>`);

rea=datos.findIndex(num => num==8);
document.write(`${rea} <br>`);

