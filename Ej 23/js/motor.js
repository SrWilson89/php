var misCoches=[
    {
        foto1:`<img src="img/c001a.png" alt=""></img>`,
        foto2:`<img src="img/c001b.png" alt=""></img>`,
        llanta1:100,
        llanta2:350,
        color:200
    },

    {
        foto1:`<img src="img/c002a.png" alt=""></img>`,
        foto2:`<img src="img/c002b.png" alt=""></img>`,
        llanta1:100,
        llanta2:350,
        color:200
    },

    {
        foto1:`<img src="img/c003a.png" alt=""></img>`,
        foto2:`<img src="img/c003b.png" alt=""></img>`,
        llanta1:0,
        llanta2:350,
        color:200
    },

    {
        foto1:`<img src="img/c004a.png" alt=""></img>`,
        foto2:`<img src="img/c004b.png" alt=""></img>`,
        llanta1:100,
        llanta2:350,
        color:270
    },

    {
        foto1:`<img src="img/c005a.png" alt=""></img>`,
        foto2:`<img src="img/c005b.png" alt=""></img>`,
        llanta1:100,
        llanta2:350,
        color:300
    },

    {
        foto1:`<img src="img/c006a.png" alt=""></img>`,
        foto2:`<img src="img/c006b.png" alt=""></img>`,
        llanta1:100,
        llanta2:350,
        color:250
    }
];

var indicecolor=0;
var indicellanta=1;
var base=14000;

function micolor(params){
    indicecolor=params
    if(indicellanta==1){
        document.getElementById('fotocoche').innerHTML=misCoches[indicecolor].foto1;
    }
    else{
        document.getElementById('fotocoche').innerHTML=misCoches[indicecolor].foto2;
    }

    if(indicecolor==0){
        document.getElementById('cnegro').style="display:none";
        document.getElementById('cblanco').style="display:none";
        document.getElementById('cazul').style="display:block";
        document.getElementById('crojo').style="display:none";
        document.getElementById('cplata').style="display:none";
        document.getElementById('cnegrom').style="display:none";
    }

    if(indicecolor==1){
        document.getElementById('cnegro').style="display:none";
        document.getElementById('cblanco').style="display:block";
        document.getElementById('cazul').style="display:none";
        document.getElementById('crojo').style="display:none";
        document.getElementById('cplata').style="display:none";
        document.getElementById('cnegrom').style="display:none";
    }

    if(indicecolor==2){
        document.getElementById('cnegro').style="display:none";
        document.getElementById('cblanco').style="display:none";
        document.getElementById('cazul').style="display:none";
        document.getElementById('crojo').style="display:none";
        document.getElementById('cplata').style="display:none";
        document.getElementById('cnegrom').style="display:block";
    }

    if(indicecolor==3){
        document.getElementById('cnegro').style="display:none";
        document.getElementById('cblanco').style="display:none";
        document.getElementById('cazul').style="display:none";
        document.getElementById('crojo').style="display:none";
        document.getElementById('cplata').style="display:block";
        document.getElementById('cnegrom').style="display:none";
    }

    if(indicecolor==4){
        document.getElementById('cnegro').style="display:block";
        document.getElementById('cblanco').style="display:none";
        document.getElementById('cazul').style="display:none";
        document.getElementById('crojo').style="display:none";
        document.getElementById('cplata').style="display:none";
        document.getElementById('cnegrom').style="display:none";
    }

    if(indicecolor==5){
        document.getElementById('cnegro').style="display:none";
        document.getElementById('cblanco').style="display:none";
        document.getElementById('cazul').style="display:none";
        document.getElementById('crojo').style="display:block";
        document.getElementById('cplata').style="display:none";
        document.getElementById('cnegrom').style="display:none";
    }

    pintaprecios()

}

function millanta(parallan){
    
    if(parallan==1){
        document.getElementById('fotocoche').innerHTML=misCoches[indicecolor].foto1;
        document.getElementById('llantablanca').style="display:none";
        document.getElementById('llantanegra').style="display:block";
    }
    else{
        document.getElementById('fotocoche').innerHTML=misCoches[indicecolor].foto2;
        document.getElementById('llantablanca').style="display:block";
        document.getElementById('llantanegra').style="display:none";
    }

    indicellanta=parallan;

    pintaprecios()
}

function pintaprecios(){

    document.getElementById('bcolor').innerHTML=misCoches[indicecolor].color;

    if(indicellanta==1){
        document.getElementById('bllantas').innerHTML=misCoches[indicecolor].llanta1;
        valorllanta=parseInt(misCoches[indicecolor].llanta1);
    }
    else{
        document.getElementById('bllantas').innerHTML=misCoches[indicecolor].llanta2;
        valorllanta=parseInt(misCoches[indicecolor].llanta2);
    }

    sumatotal= base + parseInt(misCoches[indicecolor].color + valorllanta)
    document.getElementById('btotal').innerHTML=sumatotal;
}
