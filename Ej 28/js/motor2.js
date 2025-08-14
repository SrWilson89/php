function cambiarTam(){
    var lista=document.getElementById('lista')
    var valor=lista.options[lista.selectedIndex].value;
    switch(valor){
        case 'xxs':
            document.getElementById('parrafo').style.fontSize='0.25em';
            break;

        case 'xs':
            document.getElementById('parrafo').style.fontSize='0.5em';
            break;

        case 's':
            document.getElementById('parrafo').style.fontSize='1em';
            break;

        case 'm':
            document.getElementById('parrafo').style.fontSize='2em';
            break;

        case 'l':
            document.getElementById('parrafo').style.fontSize='3em';
            break;

        case 'xl':
            document.getElementById('parrafo').style.fontSize='4em';
            break;

        case 'xxl':
            document.getElementById('parrafo').style.fontSize='5em';
            break;

        case 'xxxl':
            document.getElementById('parrafo').style.fontSize='6em';
            break;
    }
}

// Esto es lo nuevo ---------------------------------------

function mostrarAlerta(){
    alert(this.value);
}

document.getElementById('id1').addEventListener('click' , mostrarAlerta);
document.getElementById('id2').addEventListener('click' , mostrarAlerta);

document.getElementById('id3').addEventListener('click', n => alert ('Has pinchado en el boton solitario'))

document.getElementById('id4').addEventListener('click', mostrar)

function mostrar(){
    alert('Auch que daño')
}

// function tiempo(){
//     var d = new Date();
//     var h = addZero(d.getHours());
//     var m = addZero(d.getMinutes());
//     var s = addZero(d.getSeconds());

//     document.getElementById('hora').innerHTML=`${h}:${m}:${s}`;
// }

// function addZero(i){
//     if (i < 10) {
//       i = "0" + i;
//     }
//     return i;
// }

// function myFunction(){
//     var myVar;
//     myVar = setTimeout(tiempo, 1000);
//   }

window.onload = startTime();

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById("hora").innerHTML = h+ ":" + m + ":" + s;
    t = setTimeout(function(){ startTime() }, 1000);
}
  
function checkTime(i) {
if (i<10) {
    i = "0" + i;
}
return i;
}

function paraReloj(){
    clearInterval(t)
}