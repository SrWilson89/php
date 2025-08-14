var tareas=[];
var realizadas=[];

init();


function addTask(){

    var tarea = document.getElementById('tarea').value;

    if (tarea===""){}
        else{
            tareas.push(tarea);
            pintar();
            actualizarTareas();
            document.getElementById('tarea').value="";
            guardar();
        }
}

function pintar(){
    var container=document.getElementById('lista')

    container.innerHTML=``

    for(x=0; x<tareas.length; x++){
        container.innerHTML+=`
            <p>${tareas[x]}<span onclick="eliminar('${tareas[x]}')" class="eliminar">x</span></p>
        `
    }
}

function actualizarTareas(){
    var pen =document.getElementById('pendientes');
    pen.innerHTML=tareas.length;
}

function actualizarRealizadas(){
    var rea =document.getElementById('realizadas');
    rea.innerHTML=realizadas.length;
}

function eliminar(tarea){
    realizadas.push(tarea);
    var tar = tareas.filter((e)=> e!= tarea);
    tareas =tar;
    guardar();
    pintar();
    actualizarTareas();
    actualizarRealizadas();
}

function guardar(){
    localStorage.setItem('MysTareasPendientes',JSON.stringify(tareas));
    localStorage.setItem('MysTareasRealizadas',JSON.stringify(realizadas));
}

function cargar(){
    pen= localStorage.getItem('MysTareasPendientes');
    if(pen){
    tareas=JSON.parse(pen);
    }

    rea= localStorage.getItem('MysTareasRealizadas');
    if(rea){
    realizadas=JSON.parse(rea);
    }
}

function init(){
    cargar();
    pintar();
    actualizarTareas();
    actualizarRealizadas();
}