listaDeBaldosas= new Array();

listaDeBaldosas.push(new Baldosas(30,15,"Madera","Robledo", 30));
listaDeBaldosas.push(new Baldosas(30,15,"Madera Vieja","Robledo", 40));
listaDeBaldosas.push(new Baldosas(30,15,"Madera Naraja","Robledo", 12));
listaDeBaldosas.push(new Baldosas(30,15,"Madera de Talavera","Robledo", 10));
listaDeBaldosas.push(new Baldosas(40,25,"Hierro","Robledo", 40));
listaDeBaldosas.push(new Baldosas(10,8,"Pladur","Robledo", 8));
listaDeBaldosas.push(new Baldosas(20,8,"Plata","Mac", 80));
listaDeBaldosas.push(new Baldosas(30,8,"Oro","Mac", 100));
listaDeBaldosas.push(new Baldosas(20,15,"Ceramica","Mac", 18));

function pintar(){

    alto=parseInt(document.getElementById('alto').value);
    ancho=parseInt(document.getElementById('ancho').value);

    document.getElementById('contenedor').innerHTML="";

for(x=0;x<listaDeBaldosas.length;x++){    

    total=listaDeBaldosas[x].precio*listaDeBaldosas[x].espacio(alto,ancho)
    totalF=parseFloat(total).toFixed(2)

    document.getElementById('contenedor').innerHTML+=`
    <div class="azulejos">
    <p>Alto: ${listaDeBaldosas[x].altodelabaldosa}cm, Ancho:${listaDeBaldosas[x].anchodelabaldosa}cm</p>
    <p>Material: ${listaDeBaldosas[x].material}</p>
    <p>Marca: ${listaDeBaldosas[x].marca}</p>
    <p>Precio unidad: ${listaDeBaldosas[x].precio} €</p> 
    <p>Baldosas necesarias :${listaDeBaldosas[x].espacio(alto,ancho)}</p>
    <p>Precio total: ${totalF} €</p>   
    </div>
    `
}
}

function filtra(){
    var valor = document.getElementById('filtro').value;
    miFiltro=listaDeBaldosas.filter(item => item.marca.includes(valor));
    if(miFiltro===0){
        pintar();
    }else{
        pintar(miFiltro);
    }
}