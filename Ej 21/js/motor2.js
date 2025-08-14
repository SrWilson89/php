function uno(){
var matriz=[[1,2],[3,4],[5,6]];

document.write(`${matriz[2][1]} <br>`);
document.write(`${matriz[1][1]} <br>`);
document.write(`${matriz[0][0]} <br>`);
document.write(`${matriz[0][1]} <br>`);

var matriz=[["Arroz","Jamon"],["Paco","Juana"],["Verde","Azul"]];

document.write(`<br> ${matriz[2][1]} <br>`);
document.write(`${matriz[1][1]} <br>`);
document.write(`${matriz[0][0]} <br>`);
document.write(`${matriz[0][1]} <br>`);
}

funcion2=0;
dos();
function dos(){
    if(funcion2==0){
        document.getElementById('dos').style.display='none';
        funcion2++
    }else{
        document.getElementById('dos').style.display='table';
        funcion2--
    }
}

var empleados=[
    ["img/ico1.jpg","En este ejemplo hemos creado un array muy poco uniforme, porque tiene casillas con contenido de simples enteros y otras con contenido de cadena y otras que son otros arrays. Podríamos acceder a algunas de sus casillas y mostrar sus valores de esta manera"],
    ["img/ico2.jpg","Con esto hemos llegado al fin de los artículos que tratan sobre arrays en Javascript y ahora podemos continuar con una pequeña pausa y consejos que vendrán bien para mejorar nuestra relación con este lenguaje de programación"],
    ["img/ico3.jpg","Javascript todavía tiene una manera más resumida que la que acabamos de ver, que explicamos en el primer artículo donde tratamos los arrays. Para ello simplemente escribimos entre corchetes los datos del array que estamos creando. Para acabar vamos a mostrar un ejemplo sobre cómo utilizar esta sintaxis para declarar arrays de más de una dimensión."],
    ["img/ico4.jpg","Ahora vamos a ver algo más complicado, se trata de declarar el array bidimensional que utilizamos antes para las temperaturas de las ciudades en los meses en una sola línea, introduciendo los valores a la vez."],
    ["img/ico5.jpg","El método normal de crear un array vimos que era a través del objeto Array, poniendo entre paréntesis el número de casillas del array o no poniendo nada, de modo que el array se crea sin ninguna posición. Para introducir valores a un array se hace igual, pero poniendo entre los paréntesis los valores con los que deseamos rellenar las casillas separados por coma. Veámoslo con un ejemplo que crea un array con los nombres de los días de la semana."]];

selecionado=0;

pintados(selecionado);
function pintados(posicion){
    document.getElementById('imagenes').innerHTML="";
    for(x=0;x<empleados.length;x++){
        document.getElementById('imagenes').innerHTML+=`<img src="${empleados[x][0]}" onclick="pintados(${x})">`
        if(x==posicion){
            document.getElementById('texto').innerHTML=`<p> ${empleados[x][1]} </p>`
        }
    }
}

