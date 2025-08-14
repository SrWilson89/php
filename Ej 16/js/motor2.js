
var tareas= new Array();

function agregartarea(){
    var dato;

    dato=document.getElementById('tarea').value;
    tareas.push(dato);    

    document.getElementById('detalle').innerHTML="";
    

    for(x=0;x<tareas.length;x++){
        document.getElementById('detalle').innerHTML+=`
        <div style="
        margin-left: 15px; 
        margin-top: 5px; 
        padding: 2px 10px; 
        background-color: rgba(8, 80, 255, 0.30); 
        border-radius: 25px; width: fit-content; 
        font-size: 1.4em; 
        box-shadow: 2px 2px 2px lightpink;
        height: fit-content;
        color: white;">
        ${tareas[x]}
        </div>
        `;
    }

    document.getElementById('tarea').value="";
}
