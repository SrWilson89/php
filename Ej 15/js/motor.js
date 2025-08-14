function fun1(){
    nombre=prompt("Digame su nombre");
    hora=parseInt(prompt("Digame que hora es"));

    if(hora>=6 && hora<14){
        hora=("buenos dias")
    }else if(hora>=14 && hora<20){
        hora=("buenas tardes")
    }else if(hora>=20 && hora<=2){
        hora=("buenas noches")
    }else{
        hora=("vuelve a casa y echate a dormir")
    }

    document.write(`Hola ${nombre} ${hora}`)
}

function fun2(){
    num1=parseInt(prompt("Diga un numero"));
    num2=parseInt(prompt("Diga un numero"));
    total=(num1*num2);
    
    if(isNaN(total)){
        alert("Usa el teclado numerico")
    }else{document.write(`El valor de multiplicar ${num1} * ${num2} es igual a ${total}`)};
}

function fun3(){
    num1=parseInt(prompt("Diga un numero"));
    num2=parseInt(prompt("Diga un numero"));
    operacion=prompt("Diga que operador usar");

    if(operacion=="suma"){
        total=(num1+num2);
        if(isNaN(total)){
            alert("Usa el teclado numerico para los numeros")
        }else{document.write(`${num1} + ${num2} es igual a ${total}`)};
    }
    else if(operacion=="resta"){
        total=(num1-num2);
        if(isNaN(total)){
            alert("Usa el teclado numerico para los numeros")
        }else{document.write(`${num1} - ${num2} es igual a ${total}`)};
    }
    else if(operacion=="multiplica"){
        total=(num1*num2);
        if(isNaN(total)){
            alert("Usa el teclado numerico para los numeros")
        }else{document.write(`${num1} * ${num2} es igual a ${total}`)};
    }
    else if(operacion=="divide"){
        total=(num1/num2);
        if(isNaN(total)){
            alert("Usa el teclado numerico para los numeros")
        }else{document.write(`${num1} / ${num2} es igual a ${total}`)};
    }else{
        alert("La lista de los operadores es: suma, resta, multiplica y divide")
    }
}

function fun4(){

    document.write(`
    <button onclick="subir()">Subir</button>
    <button onclick="bajar()">Bajar</button>
    <button onclick="reset()">Reset</button>
    <button onclick="ascensor()">Ascensor</button>
    <button onclick="suma10()">Suma 10</button>
    <button onclick="resta10()">Resta 10</button>
    `)

}

valor=0;

function subir(){
    valor++
    console.log(`${valor}`)
}

function bajar(){
    valor--
    console.log(`${valor}`)
}

function reset(){
    valor=0;
    console.log(`${valor}`)
}

function ascensor(){
    valor=parseInt(prompt("Diga un numero"));
    console.log(`${valor}`);
}

function suma10(){
    valor=valor+10;
    console.log(`${valor}`);
}

function resta10(){
    valor-=10;
    console.log(`${valor}`);
}

function fun5(){
    var texto=prompt("Diga un nombre");
    Posicion=parseInt(prompt("Diga un numero"));
    Posicion-=1;
    Letra=texto.charAt(Posicion);
    console.log(Letra);
}

function fun6(){

    var cad1='fotografía.jpg',cad2='jpg',cad3; var cad4='cadena con espacios',r;

    console.log('letra en pos 3: '+cad1.charAt(3)); console.log('ultima posición de la o:'+ cad1.lastIndexOf('o'));

    r-cad1.charAt(100);

    console.log(r);

    r-cad1.lastIndexOf('z');

    console.log(r);

    console.log(cad1.lastIndexOf('0'));

    console.log(cad1.lastIndexOf('o', 3));

    cad3-cad1.replace('jpg', 'gif');

    console.log(cad3);

    console.log(cad2);

    console.log(cad4.split(''));

    console.log(cad4.split('a'));

    cad3-cad1.substr(4,3);

    console.log(cad3);

    cad3-cad1.substr(4,6);

    console.log(cad3);

    cad3-cad1.substr(cad1.lastIndexOf('.'), cad1.length); console.log(cad3);

    console.log(cad4.toUpperCase());

    console.log(cad4.toLowerCase());
}

