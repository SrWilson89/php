colorin();

function colorin() {

    color = prompt('elige un color')

    if (color == "amarillo") {
        color = "#f1c40f";
    } else if (color == "verde") {
        color = "#2ecc71";
    } else if (color == "azul") {
        color = "#2980b9";
    } else if (color == "naranja") {
        color = "#e67e22";
    } else if (color == "rojo") {
        color = "#e74c3c";
    } else if (color == "morado") {
        color = "#8e44ad";
    } else if (color == "negro") {
        color = "#2c3e50";
    } else {
        document.getElementById('contenedor').innerHTML += `
        <p id="advertencia">
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

function cambio(x) {

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