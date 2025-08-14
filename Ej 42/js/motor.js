var opiniones=[];

init();

function opinion(){
    
    nombre=document.getElementById(`nombre`).value;
    puntuacion=parseInt(document.getElementById(`valoracion`).value);
    pupuntuacion=parseInt(puntuacion);
    
    if(!nombre ==="" || pupuntuacion>=1 && pupuntuacion<=10){

        opiniones.push({
            nombreArt:nombre,
            puntuacionArt:puntuacion    
        });

        pintarOpinion();
        guardar();        

        //document.getElementById(`nombre`).value="";
        //document.getElementById(`valoracion`).value="";

    }else{
        alert("Revise los datos")
    }    
}

function pintarOpinion(){
    feedback=document.getElementById('opinionX');
    feedback.innerHTML="";

    for(x=0;x<opiniones.length;x++){
        feedback.innerHTML+=`
        <div class="lineal">
            <div class="izq">
                ${opiniones[x].nombreArt}
            </div>
            <div class="der">
                ${opiniones[x].puntuacionArt}
            </div>
            <button onclick="borrar(${x})">Eliminar</button>
        </div>`
    }
}

function borrar(x){
    opiniones.splice(x,1);
    pintarOpinion();
    guardar();
    pintarOpinion();
}


function guardar(){
    localStorage.setItem('MysOpiniones',JSON.stringify(opiniones));
}

function cargar(){
    car= localStorage.getItem('MysOpiniones');
    if(car){
        opiniones=JSON.parse(car);
    }
}

function init(){
    cargar();
    pintarOpinion();
}


