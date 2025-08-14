function pintar(){
    x=0;

    for (x=0;x<=1350;x++){
        document.getElementById('asd').innerHTML+=`<div class="cuadro" id="color${x}" onclick="cambio(${x})"><input type="number" id="numero${x}" class="oculto" value="0"></div>
    `;
    }
}

pintar();