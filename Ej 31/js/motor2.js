alumnos=[
    {
        nombre: "Juan",
        Apellido: "calatraba",
        NotaUnidad: 8,
        NotaModulo: 6
        },
        {
        nombre: "Antonio",
        Apellido: "Rodriguez",
        NotaUnidad: 4,
        NotaModulo: 6
        },
        {
        nombre: "Roberto",
        Apellido: "Salazar",
        NotaUnidad: 8,
        NotaModulo: 3
        },
        {
        nombre: "Pepe",
        Apellido: "Vazquez",
        NotaUnidad: 2,
        NotaModulo: 7
        },
        {
        nombre: "Yoli",
        Apellido: "Martin",
        NotaUnidad: 1,
        NotaModulo: 6
        },
        {
        nombre: "Maria",
        Apellido: "Lopez",
        NotaUnidad: 8,
        NotaModulo: 6
        },
        {
        nombre: "Alicia",
        Apellido: "Almazan",
        NotaUnidad: 4,
        NotaModulo: 6
        },
        {
        nombre: "Maria",
        Apellido: "Lopez Obrador",
        NotaUnidad: 8,
        NotaModulo: 3
        },
        {
        nombre: "Victor",
        Apellido: "Martin Pescador",
        NotaUnidad: 2,
        NotaModulo: 7
        },
        {
        nombre: "Melendi",
        Apellido: "Sanguino",
        NotaUnidad: 1,
        NotaModulo: 6
        }
]

pintar();

function pintar(){

    document.getElementById('contenedor').innerHTML="";

    for(x=0 ; x<alumnos.length ;x++){

        notaFinal=parseFloat(((alumnos[x].NotaUnidad*.3)+(alumnos[x].NotaModulo*.7))).toFixed(2)

        if(notaFinal>=5){
            document.getElementById('contenedor').innerHTML+=`
                <div class="alumnos">
                    <p>Nombre y apellidos: ${alumnos[x].nombre} ${alumnos[x].Apellido}</p>
                    <p>Nota Global: ${notaFinal}</p>
                </div>
            `;
        }else{
            document.getElementById('contenedor').innerHTML+=`
                <div class="alumnos">
                    <p>Nombre y apellidos: ${alumnos[x].nombre} ${alumnos[x].Apellido}</p>
                    <p>Nota Global: <span class="rojo">${notaFinal}</span></p>
                </div>
            `;
        }
    }
}