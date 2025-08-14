colorin();

function colorin(){

    color=prompt('elige un color')

    if (color=="amarillo"){
        color="#f1c40f";
        pintar();
    }

    if (color=="verde"){
        color="#2ecc71";
        pintar();
    }

    if (color=="azul"){
        color="#2980b9";
        pintar();
    }

    if (color=="naranja"){
        color="#e67e22";
        pintar();
    }

    if (color=="rojo"){
        color="#e74c3c";
        pintar();
    }

    if (color=="morado"){
        color="#8e44ad";
        pintar();
    }

    if (color=="negro"){
        color="#2c3e50";
        pintar();
    }

    else{
        document.getElementById('contenedor').innerHTML+=`<p style="color: white; font-size: 2.5em;">
            Los colores disponibles son:<br>
            amarillo<br>
            verde<br>
            azul<br>
            naranja<br>
            rojo<br>
            morado<br>
            negro
        </p>`;
   }   
}

function pintar(){
    x=0;
    
    for (x=0;x<=300;x++){
        document.getElementById('contenedor').innerHTML+="";
        document.getElementById('contenedor').innerHTML+=`
        <div class="cuadro" id="color${x}" onclick="cambio(${x})"><input type="number" id="numero${x}" class="oculto" value="0"></div>
        `;
    }    
}

y=0;

function cambio(x){

    y=document.getElementById(`numero${x}`).value;

    if (y == 0) {
        document.getElementById(`color${x}`).style.backgroundColor = `${color}`;
        y++;
        document.getElementById(`numero${x}`).value=y;

    } else {
        document.getElementById(`color${x}`).style.backgroundColor = "#ffffff";
        y--;
        document.getElementById(`numero${x}`).value=y;
    }
     
}