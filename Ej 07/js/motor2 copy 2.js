function cambio(x) {

    document.getElementById(`color${x}`).style.backgroundColor =`${color}`;    
}

function amarillo(){
    color="#f1c40f";
}

function verde(){
    color="#2ecc71";
}

function azul(){
    color="#2980b9";
}

function naranja(){
    color="#e67e22";
}

function rojo(){
    color="#e74c3c";
}

function morado(){
    color="#8e44ad";
}

function negro(){
    color="#1e272e";
}

function blanco(){
    color="#ffffff";
}

function oculto(){
    
    for(x=0; x<=1350; x++){
        document.getElementById(`color${x}`).style.border="1px solid white";
    }
}

function mostrar(){
    
    for(x=0; x<=1350; x++){
        document.getElementById(`color${x}`).style.border="1px solid black";
    }
}