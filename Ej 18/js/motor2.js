var tareas=[];
var completadas=[];

// pintar();
// function pintar(){
//     document.write(`
//         <div class="container">
//             <div class="cajon">
//                 <div class="cabeza">
//                     <input type="text" id="info">
//                     <i class="fas fa-plus" onclick="add()"></i>
//                 </div>
//                 <div id="cuerpo">                
                                   
//                 </div>
//             </div>
//         </div>
//     `)
// }

function add(){

    texto=document.getElementById('info').value;
    tareas.push({texto});

    //document.getElementById('info').value="";

    document.getElementById('cuerpo').innerHTML="";

    pintar();
    
};

function pintar(){
    document.getElementById('cuerpo').innerHTML="";
    numtar=0;
    for(x=0;x<tareas.length;x++){
        
        document.getElementById('cuerpo').innerHTML+=`
        <div class="datos">
            <p id="tc${x}">${tareas[x].texto}</p>
            <div class="cerrar" onclick="borrar(${x})"><i class="far fa-times-circle"></i></div>
            <div class="check" onclick="check(${x})"><i class="fas fa-check"></i></div>
            
        </div> 
        `;
    };

    document.getElementById('tareas').innerHTML=`<p>${tareas.length} Tareas pendientes</p><i class="fas fa-trash-alt" onclick="borrarTodo()"></i>`;
    document.getElementById('completadas').innerHTML=`<p>${completadas.length} Tareas completadas</p><i class="fas fa-trash-alt" onclick="borrarTodoTC()"></i>`;

    localStorage.setItem('listaTareas',JSON.stringify(tareas));
}

function cargaDatos(){
    if (localStorage.getItem('listaTareas')){
        tareas=JSON.parse(localStorage.getItem('listaTareas'));
        pintar();
    }
    if (localStorage.getItem('tareasCompletadas')){
        completadas=JSON.parse(localStorage.getItem('tareasCompletadas'));
        pintar();
    }
}

cargaDatos();

function borrar(x){
    tareas.splice(x,1);
    localStorage.setItem('listaTareas',JSON.stringify(tareas));
    pintar();
}

function limpiar(){
    document.getElementById('info').value="";
}

function borrarTodo(){
    tareas.splice(0,tareas.length);
    localStorage.setItem('listaTareas',JSON.stringify(tareas));
    pintar();
}

function borrarTodoTC(){
    completadas.splice(0,completadas.length);
    localStorage.setItem('tareasCompletadas',JSON.stringify(completadas));
    pintar();
}

function check(x){
    tarComUn=document.getElementById(`tc${x}`)
    completadas.push({tarComUn});
    localStorage.setItem('tareasCompletadas',JSON.stringify(completadas));
    borrar(x);
}