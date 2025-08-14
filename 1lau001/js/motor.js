
usuarios = [
    {   genero: "Masculino",
        nombre: "Manuel",
        apellido:"Fernández",
        edad: 26,
    },

    {   genero: "Femenino",
        nombre: "Sandra",
        apellido:"Lopez",
        edad: 46,
    },

    {   genero: "Femenino",
        nombre: "Maria",
        apellido:"Flores",
        edad: 23,
    },

    {   genero: "Femenino",
        nombre: "Alicia",
        apellido:"Lopez",
        edad: 16,
    },

    {   genero: "Femenino",
        nombre: "Vanessa",
        apellido:"Lopez",
        edad: 23,
    },

    {   genero: "Femenino",
        nombre: "Rocio",
        apellido:"Lopez",
        edad: 21,
    },

    {   genero: "Masculino",
        nombre: "Pedro",
        apellido:"Fernández",
        edad: 28,
    },
    {   genero: "Masculino",
        nombre: "Pepe",
        apellido:"Lopez",
        edad: 29,
    },

    {   genero: "Masculino",
        nombre: "David",
        apellido:"Fernández",
        edad: 20,
    },

    {   genero: "Masculino",
        nombre: "Jose",
        apellido:"Fernández",
        edad: 17,
    }
];


/*var listaHombres = new Array();
var listaMujeres = new Array();


mostrarHombres();
mostrarMujeres();*/


var hombres = usuarios.filter(item => item.genero == "Masculino");
var mujeres = usuarios.filter(item => item.genero == "Femenino");

pintarMujer();
pintarHombre();

/**********  Funciones  **************/

function pintarMujer(){
    var mMujeres = mujeres.filter(item => item.edad < 25);

    for(var i=0;i<mMujeres.length; i++){
        if(mMujeres[i].edad < 18){
            document.getElementById('mujer').innerHTML += `<div class="mujerMenor"> ${mMujeres[i].nombre} - ${mMujeres[i].edad}
        </div>`;
        }else{
        document.getElementById('mujer').innerHTML += `<div> ${mMujeres[i].nombre} - ${mMujeres[i].edad}
        </div>`;
        }
        
    }
}

function pintarHombre(){
    var mHombres = hombres.filter(item => item.edad < 25);

    for(var i=0;i<mHombres.length; i++){
        document.getElementById('hombre').innerHTML += `<div> ${mHombres[i].nombre} - ${mHombres[i].edad}
        </div>`;
        
    }
}





/*function buscarUsuarios(){
    for(var i=0; i<usuarios.length;i++){
        if(usuarios[i].genero == "Masculino" && usuarios[i].edad > 20){
            listaHombres.push(usuarios[i]);

        }else{
            if(usuarios[i].genero == "Femenino"){
                listaMujeres.push(usuarios[i]);
            }
        }
    }
}*/


/*function mostrarHombres(){
    document.getElementById('container').innerHTML= "";

    for(var i=0; i<listaHombres.length;i++){
        document.getElementById('container').innerHTML += `<div class = "hombres">
                <div> ${listaHombres[i].genero} </div>
                <div> ${listaHombres[i].nombre}</div>
                <div> ${listaHombres[i].edad} </div>
        </div>`;
    }
}

function mostrarMujeres(){
    document.getElementById('container').innerHTML="";

    for(var i=0; i<listaMujeres.length;i++){
        document.getElementById("container").innerHTML += `<div class = "mujeres">
                <div> ${listaMujeres[i].genero} </div>
                <div> ${listaMujeres[i].nombre}</div>
                <div> ${listaMujeres[i].edad} </div>

        </div>`;
    }
}*/