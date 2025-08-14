
//Ejercicio 1
/*

var valores=['perro','gato','león',8,18,'minino'];
document.write(valores+'<br>');
document.write(valores[3]+'<br>');

document.write('<br>');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//recorrer Array


var bandera=true;

valores.push('lechón');



for(var x=0;x<valores.length;x++){

    document.write('<div>'+ valores[x] +'</div>');

};

document.write('<br>');

for(var x=valores.length-1;x>=0;x--){

    document.write('<div>'+ valores[x] +'</div>');

};

document.write('<br>');

///////////////////////////////////////

//arriba();
//abajo();
cambia();





function arriba(){

    for(var x=0;x<valores.length;x++){

        document.getElementById('milistado').innerHTML+='<div>'+ valores[x] +'</div>';

    
    };


};

function abajo(){

    document.getElementById('milistado').innerHTML='';

    for(var x=valores.length-1;x>=0;x--){


        document.getElementById('milistado').innerHTML+='<div>'+ valores[x] +'</div>';


    };
    
};

///// CAMBIAR///// MODELO TOGEL

function cambia(){

    document.getElementById('milistado').innerHTML=''; //limpia la pantalla RESET

    if (bandera==true){

        arriba();
        bandera=false;

        document.getElementById('enlace').innerHTML='<i class="fas fa-arrow-up"></i>'
    }else{

        abajo();
        bandera=true;
        document.getElementById('enlace').innerHTML='<i class="fas fa-arrow-down"></i>'

    };



}; */


///////////////////////////////////////////////////////////////////////////////////////////////////////




//Ejercicio 2


var imagenes=['img/cat1.jpg','img/cat2.png','img/cat3.jpg','img/cat4.jpeg','img/cat5.png','img/cat6.jpg'];
var posicion=0;

/*
for( var x=0;x<imagenes.length;x++){

document.write( `<div class="imagen" ><img src="${imagenes[x]}"></div>`);


};*/

document.getElementById('imagen').innerHTML=`<img src="${imagenes[posicion]}"></img>`;

function mas(){

if(posicion<imagenes.length-1){

    posicion++;

    document.getElementById('imagen').innerHTML=`<img src="${imagenes[posicion]}"></img>`;

};

if(posicion==imagenes.length-1){

    document.getElementById('mas').innerHTML='';

}

if(posicion>0){

    document.getElementById('menos').innerHTML='<i class="fas fa-chevron-circle-left"></i>';
};

pintabola(posicion);
};


function menos(){
if(posicion>0){
posicion--;
document.getElementById('imagen').innerHTML=`<img src="${imagenes[posicion]}"></img>`;

document.getElementById('mas').innerHTML='<i class="fas fa-chevron-circle-right"></i>';


if(posicion==0){

    document.getElementById('menos').innerHTML='';

}
}else{

    document.getElementById('menos').innerHTML='';
    
};
pintabola(posicion);
    
};


function anadir(){

valor=document.getElementById('texto').value;
imagenes.push(valor);


};


pintabola(0);

function pintabola(posicion){

    document.getElementById('posicion').innerHTML='';

    for(var x=0;x<imagenes.length;x++){

if(posicion==x){


document.getElementById('posicion').innerHTML+='<div class="bolaR"></div>';


}else{

    document.getElementById('posicion').innerHTML+='<div class="bolaT"></div>';


};

};
};





















