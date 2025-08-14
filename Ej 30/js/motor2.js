for (var x=0; x<8;x++){
    
    for (var y=0; y<8;y++){
        if(x%2==0){
            if(y%2==0){
                document.getElementById('contenedor').innerHTML+=`<div class="negro"></div>`
            }else{
                document.getElementById('contenedor').innerHTML+=`<div class="blanco"></div>`
            }
        }else{
            if(y%2==0){
                document.getElementById('contenedor').innerHTML+=`<div class="blanco"></div>`
            }else{
                document.getElementById('contenedor').innerHTML+=`<div class="negro"></div>`
            }
        }
    }
}

// document.getElementById('contenedor').innerHTML="";
// document.getElementById('contenedor').innerHTML+=`<div class="blanco"></div>`;

// for (var x; x<8;x++){    
//     document.getElementById('contenedor').innerHTML+=`<div class="blanco"></div>`;
// }
