// class Rectangulo{
//     alto;
//     ancho;

//     constructor(alto,ancho){
//         this.alto=alto;
//         this.ancho=ancho;
//     }

// }

// var figura1= new Rectangulo(10,20);

class Alumno{
    nombre;
    apellido;
    edad;
    direccion;
    poblacion;
    nota;

    constructor(nombre,apellido,edad,direccion,poblacion,nota){
        this.nombre=nombre;
        this.apellido=apellido;
        this.edad=edad;
        this.direccion=direccion;
        this.poblacion=poblacion;
        this.nota=5;
    }
}

//var alumno1= new Alumno("Manuel","Perez",20,"C/ Medellin, 5","Talavera de la Reina")

var listadoAlumnos=new Array();

//listadoAlumnos.push(alumno1);

//listadoAlumnos.push(new Alumno("Juan","Nuñez",25,"C/ Teide, 5","Talavera de la Reina"));

// for(var a=0; a<listadoAlumnos.length; a++){
//     document.write(`
//     <div>
//     ${listadoAlumnos[a].nombre} ${listadoAlumnos[a].apellido}
//     </div>
//     `)
// }

function addArray(){
    var vnombre=document.getElementById('nombre').value;
    var vapellido=document.getElementById('apellido').value;
    var vedad=document.getElementById('edad').value;
    var vdireccion=document.getElementById('direccion').value;
    var vpoblacion=document.getElementById('poblacion').value;

    listadoAlumnos.push(new Alumno(vnombre,vapellido,vedad,vdireccion,vpoblacion))

    localStorage.setItem('MysdatosAlumnos',JSON.stringify(listadoAlumnos));

    pintar();
}

function cargaDatos(){
    if (localStorage.getItem('MysdatosAlumnos')){
        listadoAlumnos=JSON.parse(localStorage.getItem('MysdatosAlumnos'));
        pintar();
    }
}

cargaDatos();

function pintar(){
    document.getElementById('listado').innerHTML="";
    document.getElementById('listado').innerHTML=`
        <div>
            <p class="cerrarT" onclick="eliminarTodo()" >Borrar Todo</p>
        </div>`;

    for(var a=0; a<listadoAlumnos.length; a++){
        if(listadoAlumnos[a].nota>=9){
            document.getElementById('listado').innerHTML+=`
                <div class="alumno verde">
                    <p>Nombre y apellido: ${listadoAlumnos[a].nombre} ${listadoAlumnos[a].apellido} <p>
                    <p>Edad: ${listadoAlumnos[a].edad} <span style="cursor: pointer;" onclick="nota(${a})"> Nota: ${listadoAlumnos[a].nota}</span><p>
                    <p>Direccion: ${listadoAlumnos[a].direccion} Poblacion: ${listadoAlumnos[a].poblacion}<p>
                    <p class="cerrar" onclick="eliminarAlumno(${a})" >x</p>
                </div>`;
        }else if (listadoAlumnos[a].nota>=5){
            document.getElementById('listado').innerHTML+=`
                <div class="alumno azul">
                    <p>Nombre y apellido: ${listadoAlumnos[a].nombre} ${listadoAlumnos[a].apellido} <p>
                    <p>Edad: ${listadoAlumnos[a].edad} <span style="cursor: pointer;" onclick="nota(${a})"> Nota: ${listadoAlumnos[a].nota}</span><p>
                    <p>Direccion: ${listadoAlumnos[a].direccion} Poblacion: ${listadoAlumnos[a].poblacion}<p>
                    <p class="cerrar" onclick="eliminarAlumno(${a})" >x</p>
                </div>`;
        }else{
            document.getElementById('listado').innerHTML+=`
                <div class="alumno naranja">
                    <p>Nombre y apellido: ${listadoAlumnos[a].nombre} ${listadoAlumnos[a].apellido} <p>
                    <p>Edad: ${listadoAlumnos[a].edad} <span style="cursor: pointer;" onclick="nota(${a})"> Nota: ${listadoAlumnos[a].nota}</span><p>
                    <p>Direccion: ${listadoAlumnos[a].direccion} Poblacion: ${listadoAlumnos[a].poblacion}<p>
                    <p class="cerrar" onclick="eliminarAlumno(${a})" >x</p>
                </div>`;
        }
    }
}

function nota(x){
    var valor=parseInt(prompt("Cambia tu nota", listadoAlumnos[x].nota));
    if(!isNaN(valor)){
        listadoAlumnos[x].nota=valor;
        localStorage.setItem('MysdatosAlumnos',JSON.stringify(listadoAlumnos));
    }

    pintar();
}

function eliminarAlumno(posicion){
    listadoAlumnos.splice(posicion,1);
    localStorage.setItem('MysdatosAlumnos',JSON.stringify(listadoAlumnos));
    pintar();
}

function eliminarTodo(){
    listadoAlumnos.splice(0,listadoAlumnos.length);
    localStorage.setItem('MysdatosAlumnos',JSON.stringify(listadoAlumnos));    
    pintar();
}


