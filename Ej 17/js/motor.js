var bandera=true;

var valores=[
    "perro",
    'gato',
    'leon',
    8,
    18,
    'minino'
];

function arriba(){
    
    for (x=0;x<valores.length;x++){
        document.getElementById(`milistado`).innerHTML+=`
        <div>${valores[x]}</div>
        `
    }

    document.getElementById(`flecha`).innerHTML=`<i class="fas fa-arrow-circle-down"></i>`;

}

function abajo(){

    for (x=valores.length-1;x>=0;x--){
        document.getElementById(`milistado`).innerHTML+=`
        <div>${valores[x]}</div>
        `
    }

    document.getElementById(`flecha`).innerHTML=`<i class="fas fa-arrow-circle-up"></i>`;

}

function cambia(){

    document.getElementById(`milistado`).innerHTML="";

    if(bandera==true){
        arriba();
        bandera=false;
    }else{
        abajo();
        bandera=true
    }
}

var gatos=[
    `img/gato1.jpg`,
    `img/gato2.jpg`,
    `img/gato3.jpg`,
    `img/gato4.jfif`,
    `img/gato5.jpg`,
]

var posicion=0;

// function pintagato(){

// document.getElementById(`milistado2`).innerHTML+=`    
//     <div class="contenedor">
//     <div class="izq" onclick="atras()">
//         <h2><i class="fas fa-arrow-alt-circle-left"></i></h2>
//     </div>
//     <div id="gatos">
//         <img src="">
//     </div>
//     <div class="der" onclick="alante()">
//         <h2><i class="fas fa-arrow-alt-circle-right"></i></h2>
//     </div>
//     </div>            
// `
// }

// pintagato();

function pintagato(){
    document.getElementById(`gatos`).innerHTML=`    
        <div id="gatos">
            <img src="${gatos[posicion]}">
        </div>              
        `;
    longitud();        
}

pintagato();

function longitud(){

    document.getElementById(`posicion`).innerHTML="";

    for(x=0;x<=gatos.length-1;x++){
        if(x==posicion){
            document.getElementById(`posicion`).innerHTML+='<i class="fas fa-dot-circle"></i>';
        }else{
            document.getElementById(`posicion`).innerHTML+='<i class="far fa-dot-circle"></i>';
        }
    }
}

function alante(){
    
    if(posicion<=gatos.length-2){
        
        posicion++;

        document.getElementById(`gatos`).innerHTML=`    
            <div id="gatos">
                <img src="${gatos[posicion]}">
            </div>              
            `; 
            
        longitud();
    }
}

function atras(){

    if(posicion>0){

        posicion--;

        document.getElementById(`gatos`).innerHTML=`    
            <div id="gatos">
                <img src="${gatos[posicion]}">
            </div>              
            `;

        longitud();
        
    }    
}

function add(){
    valor=document.getElementById('texto').value
    gatos.push(valor);
    longitud();
}
