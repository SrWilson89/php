function run(){
    texto=document.getElementById('codigo').value;

    document.getElementById('der').innerHTML=`
    ${texto}
    `;
}

function ejemplo(){
    texto=`
<div class="contentexto">
    <div class="textoinicial">
        <h3>Talavera en Fiestas</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Laudantium repudiandae rerum enim ducimus qui incidunt aliquam 
            est autem dolorum temporibus natus accusantium voluptatem aspernatur 
            eos tempore, accusamus quis voluptate doloremque.</p>
            <div class="cajaiconos">
                <i class="fab fa-facebook-square colorazul" ></i>
                <i class="fab fa-instagram colorazul"></i>
                <i class="fab fa-twitter-square colorazul"></i>
                <i class="fab fa-whatsapp-square colorazul"></i>
            </div>
        </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<style>
    
    .contentexto{
        height: calc(100% - 70px);
        display: flex;
        justify-content: center; 
        align-items: center;
        overflow:hidden;
    }

    .textoinicial{
        padding: 10px;
        width: 40%;
        border: 5px double black;
    }

    .textoinicial h3{
        padding-bottom: 15px;
    }

    .colorazul{
        color: blue;
    }

    .cajaiconos{
        display: flex;
        justify-content: flex-end;
        font-size: 1em;
        padding-top: 10px;
        padding-bottom: 10px;        
    }

    .cajaiconos i{
        padding: 5px;
        border: 5px double black;
        margin-left: 5px;
        margin-right: 5px;
    }

    .cajaiconos i:hover{
        background-color: #00b894;
    }
</style>
    `;

    document.getElementById('codigo').value=`
    ${texto}
    `;    
}

function div(){
    texto=`<div class="" id="">
    
    </div>`;

    document.getElementById('codigo').value+=`
    ${texto}
    `; 
}

function estilo(){
    texto=`<style>

    </style>`;

    document.getElementById('codigo').value+=`
    ${texto}
    `; 
}

function script(){
    texto=`<script>

    </script>`;

    document.getElementById('codigo').value+=`
    ${texto}
    `; 
}

function br(){
    texto=`<br>`;

    document.getElementById('codigo').value+=`
    ${texto}
    `; 
}

function parrafo(){
    texto=`<p class="" id=""></p>`;

    document.getElementById('codigo').value+=`
    ${texto}
    `; 
}

function titulo(){
    x=prompt("Elige un tamaño de titulo")
    if(x>=1 && x<=6){
        
        texto=`<h${x}></h${x}>`;

        document.getElementById('codigo').value+=`
        ${texto}
        `;

    }else{
        alert("Recuerda que el tamaño va del 1 al 6")    
    } 
}

function borrar(){
    document.getElementById('codigo').value=``;
    document.getElementById('der').innerHTML=``;
}

function img(){
    enla=prompt("Inserta el enlace de la foto");
    texto=`<img src="${enla}" class="" id="">`;

    document.getElementById('codigo').value+=`
    ${texto}
    `; 
}

function enlace(){
    enla=prompt("Inserta el enlace de la web");
    definicion=prompt("Inserta el nombre para mostrar");
    texto=`<a href="${enla}" class="" id="">${definicion}</a>`;

    document.getElementById('codigo').value+=`
    ${texto}
    `; 
}

function divcontenedor2(){
texto=`<style>
.contenedor{
    background-color: rgb(7, 7, 7);
    width: 100%;
    height: 50%;
    display: flex;
    align-items:center;
    justify-content: space-around;
}

.cajita2{
    background-color: rgba(168, 197, 252, 0.80);
    width: 45%;
    height: 50%;
}

.cajita2 img{
    width: 100%;    
}
    </style>
<div class="contenedor" id="" >
    <div class="cajita2" id="" >

    </div>
    <div class="cajita2" id="">
    
    </div>
</div>`;

    document.getElementById('codigo').value+=`
    ${texto}
    `; 
}

function divcontenedor3(){
    texto=`<style>
    .contenedor{
        background-color: rgb(7, 7, 7);
        width: 100%;
        height: 50%;
        display: flex;
        align-items:center;
        justify-content: space-around;
    }
    
    .cajita3{
        background-color: rgba(168, 197, 252, 0.80);
        width: 30%;
        height: 50%;
    }

    .cajita3 img{
        width: 100%;    
    }
        </style>
    <div class="contenedor" id="" >
        <div class="cajita3" id="" >
    
        </div>
        <div class="cajita3" id="">
        
        </div>

        <div class="cajita3" id="">
        
        </div>
    </div>`;
    
        document.getElementById('codigo').value+=`
        ${texto}
        `; 
    }
