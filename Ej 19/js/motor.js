var Usuarios = [{
        foto: '<img src="img/001.jpg" alt="">',
        experiencia: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    },
    {
        foto: '<img src="img/002.jpg" alt="">',
        experiencia: "Todo bien todo correcto",
    },
    {
        foto: '<img src="img/003.jpg" alt="">',
        experiencia: "Todo bien todo correcto ya tu sabes",
    },
    {
        foto: '<img src="img/004.jpg" alt="">',
        experiencia: "Sopa de caracol",
    },
    {
        foto: '<img src="img/005.jpg" alt="">',
        experiencia: "...---...",
    },
    {
        foto: '<img src="img/006.jpg" alt="">',
        experiencia: `No quiero que más nadie me hable de amor
        Ya me cansé, to' esos trucos ya me los sé
        Esos dolores los pasé, yeh, yeh, yeh
        No quiero que más nadie me hable de amor
        Ya me cansé, to' esos trucos ya me los sé
        Esos dolores los pasé`,
    }
];

function pintar(){

    document.write(`<div class="horizontal">`);

    for(x=0;x<Usuarios.length;x++){
        document.write(`        
        <div class="usuario" id="foto${x}" onclick="opiniones(${x})">
            ${Usuarios[x].foto}   
        </div>               
        `)
    };

    document.write(`</div>`);
    document.write(`<div id="opinion"></div> `);

}

pintar();

function opiniones(pos){

    
    document.getElementById(`opinion`).innerHTML=`<p>${Usuarios[pos].experiencia}</p>`;

    for(x=0;x<Usuarios.length;x++){
        if(x==pos){
            document.getElementById(`foto${pos}`).style=`
            filter: grayscale(0%);
            transform:scale(1.25);`;
        }

        else{
            document.getElementById(`foto${x}`).style=`
            filter: grayscale(100%);
            transform:scale(1);`;
        }
    };


}