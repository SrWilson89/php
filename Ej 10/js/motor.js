function pintar(){

    if(document.getElementById('creditos').innerHTML==0){
        alert("Inserte mas creditos")
    }else{

    premio=5;

    v1=Math.round(1+Math.random()*(7-1));
    v2=Math.round(1+Math.random()*(7-1));
    v3=Math.round(1+Math.random()*(7-1));

    if(v1==1 && v2==1 && v3==1){
        premio=premio*2
        document.getElementById('premios').innerHTML=`
        ${premio}
        `;
        alert(`Tu premio asciende al total de ${premio} creditos`)
    }

    else if(v1==2 && v2==2 && v3==2){
        premio=premio*4
        document.getElementById('premios').innerHTML=`
        ${premio}
        `;
        alert(`Tu premio asciende al total de ${premio} creditos`)
    }

    else if(v1==3 && v2==3 && v3==3){
        premio=premio*8
        document.getElementById('premios').innerHTML=`
        ${premio}
        `;
        alert(`Tu premio asciende al total de ${premio} creditos`)
    }

    else if(v1==4 && v2==4 && v3==4){
        premio=premio*16
        document.getElementById('premios').innerHTML=`
        ${premio}
        `;
        alert(`Tu premio asciende al total de ${premio} creditos`)
    }

    else if(v1==5 && v2==5 && v3==5){
        premio=premio*32
        document.getElementById('premios').innerHTML=`
        ${premio}
        `;
        alert(`Tu premio asciende al total de ${premio} creditos`)
    }

    else if(v1==6 && v2==6 && v3==6){
        premio=premio*64
        document.getElementById('premios').innerHTML=`
        ${premio}
        `;
        alert(`Tu premio asciende al total de ${premio} creditos`)
    }

    else if(v1==7 && v2==7 && v3==7){
        premio=premio*128
        document.getElementById('premios').innerHTML=`
        ${premio}
        `;
        alert(`Tu premio asciende al total de ${premio} creditos`)
    }


    else{
        premio=premio*0
        document.getElementById('premios').innerHTML=`
        ${premio}
        `;
    }

    v4=Math.round(1+Math.random()*(7-1));
    v5=Math.round(1+Math.random()*(7-1));
    v6=Math.round(1+Math.random()*(7-1));

    v7=Math.round(1+Math.random()*(7-1));
    v8=Math.round(1+Math.random()*(7-1));
    v9=Math.round(1+Math.random()*(7-1));

    if(v1==1){
        v1='<img src="https://i0.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/cebolleta.jpg?resize=600%2C1051&ssl=1" alt=""></img>'
    }
    if(v1==2){
        v1='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Cerezas.jpg"></img>'
    }
    if(v1==3){
        v1='<img src="https://i2.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Uvas.jpg"></img>'
    }
    if(v1==4){
        v1='<img src="https://i0.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/ciruela.jpg"></img>'
    }
    if(v1==5){
        v1='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/fresa.jpg"></img>'
    }
    if(v1==6){
        v1='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Sand%C3%ADa.jpg"></img>'
    }
    if(v1==7){
        v1='<img src="https://i2.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Pl%C3%A1tano.jpg"></img>'
    }

    if(v2==1){
        v2='<img src="https://i0.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/cebolleta.jpg?resize=600%2C1051&ssl=1" alt=""></img>'
    }
    if(v2==2){
        v2='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Cerezas.jpg"></img>'
    }
    if(v2==3){
        v2='<img src="https://i2.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Uvas.jpg"></img>'
    }
    if(v2==4){
        v2='<img src="https://i0.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/ciruela.jpg"></img>'
    }
    if(v2==5){
        v2='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/fresa.jpg"></img>'
    }
    if(v2==6){
        v2='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Sand%C3%ADa.jpg"></img>'
    }
    if(v2==7){
        v2='<img src="https://i2.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Pl%C3%A1tano.jpg"></img>'
    }

    if(v3==1){
        v3='<img src="https://i0.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/cebolleta.jpg?resize=600%2C1051&ssl=1" alt=""></img>'
    }
    if(v3==2){
        v3='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Cerezas.jpg"></img>'
    }
    if(v3==3){
        v3='<img src="https://i2.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Uvas.jpg"></img>'
    }
    if(v3==4){
        v3='<img src="https://i0.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/ciruela.jpg"></img>'
    }
    if(v3==5){
        v3='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/fresa.jpg"></img>'
    }
    if(v3==6){
        v3='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Sand%C3%ADa.jpg"></img>'
    }
    if(v3==7){
        v3='<img src="https://i2.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Pl%C3%A1tano.jpg"></img>'
    }    

    if(v4==1){
        v4='<img src="https://i0.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/cebolleta.jpg?resize=600%2C1051&ssl=1" alt=""></img>'
    }
    if(v4==2){
        v4='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Cerezas.jpg"></img>'
    }
    if(v4==3){
        v4='<img src="https://i2.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Uvas.jpg"></img>'
    }
    if(v4==4){
        v4='<img src="https://i0.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/ciruela.jpg"></img>'
    }
    if(v4==5){
        v4='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/fresa.jpg"></img>'
    }
    if(v4==6){
        v4='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Sand%C3%ADa.jpg"></img>'
    }
    if(v4==7){
        v4='<img src="https://i2.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Pl%C3%A1tano.jpg"></img>'
    }

    if(v5==1){
        v5='<img src="https://i0.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/cebolleta.jpg?resize=600%2C1051&ssl=1" alt=""></img>'
    }
    if(v5==2){
        v5='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Cerezas.jpg"></img>'
    }
    if(v5==3){
        v5='<img src="https://i2.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Uvas.jpg"></img>'
    }
    if(v5==4){
        v5='<img src="https://i0.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/ciruela.jpg"></img>'
    }
    if(v5==5){
        v5='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/fresa.jpg"></img>'
    }
    if(v5==6){
        v5='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Sand%C3%ADa.jpg"></img>'
    }
    if(v5==7){
        v5='<img src="https://i2.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Pl%C3%A1tano.jpg"></img>'
    }

    if(v6==1){
        v6='<img src="https://i0.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/cebolleta.jpg?resize=600%2C1051&ssl=1" alt=""></img>'
    }
    if(v6==2){
        v6='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Cerezas.jpg"></img>'
    }
    if(v6==3){
        v6='<img src="https://i2.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Uvas.jpg"></img>'
    }
    if(v6==4){
        v6='<img src="https://i0.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/ciruela.jpg"></img>'
    }
    if(v6==5){
        v6='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/fresa.jpg"></img>'
    }
    if(v6==6){
        v6='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Sand%C3%ADa.jpg"></img>'
    }
    if(v6==7){
        v6='<img src="https://i2.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Pl%C3%A1tano.jpg"></img>'
    }

    if(v7==1){
        v7='<img src="https://i0.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/cebolleta.jpg?resize=600%2C1051&ssl=1" alt=""></img>'
    }
    if(v7==2){
        v7='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Cerezas.jpg"></img>'
    }
    if(v7==3){
        v7='<img src="https://i2.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Uvas.jpg"></img>'
    }
    if(v7==4){
        v7='<img src="https://i0.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/ciruela.jpg"></img>'
    }
    if(v7==5){
        v7='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/fresa.jpg"></img>'
    }
    if(v7==6){
        v7='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Sand%C3%ADa.jpg"></img>'
    }
    if(v7==7){
        v7='<img src="https://i2.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Pl%C3%A1tano.jpg"></img>'
    }

    if(v8==1){
        v8='<img src="https://i0.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/cebolleta.jpg?resize=600%2C1051&ssl=1" alt=""></img>'
    }
    if(v8==2){
        v8='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Cerezas.jpg"></img>'
    }
    if(v8==3){
        v8='<img src="https://i2.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Uvas.jpg"></img>'
    }
    if(v8==4){
        v8='<img src="https://i0.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/ciruela.jpg"></img>'
    }
    if(v8==5){
        v8='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/fresa.jpg"></img>'
    }
    if(v8==6){
        v8='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Sand%C3%ADa.jpg"></img>'
    }
    if(v8==7){
        v8='<img src="https://i2.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Pl%C3%A1tano.jpg"></img>'
    }

    if(v9==1){
        v9='<img src="https://i0.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/cebolleta.jpg?resize=600%2C1051&ssl=1" alt=""></img>'
    }
    if(v9==2){
        v9='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Cerezas.jpg"></img>'
    }
    if(v9==3){
        v9='<img src="https://i2.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Uvas.jpg"></img>'
    }
    if(v9==4){
        v9='<img src="https://i0.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/ciruela.jpg"></img>'
    }
    if(v9==5){
        v9='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/fresa.jpg"></img>'
    }
    if(v9==6){
        v9='<img src="https://i1.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Sand%C3%ADa.jpg"></img>'
    }
    if(v9==7){
        v9='<img src="https://i2.wp.com/webdelmaestro.com/wp-content/uploads/2017/03/Pl%C3%A1tano.jpg"></img>'
    }


    document.getElementById('linea1').innerHTML=`
    <div class="resultado" id="resultado1">
        ${v4}
    </div>

    <div class="resultado" id="resultado2">
        ${v5}
    </div>

    <div class="resultado" id="resultado3">
        ${v6}
    </div>
    `;

    document.getElementById('linea2').innerHTML=`
    <div class="resultado" id="resultado1">
        ${v1}
    </div>

    <div class="resultado" id="resultado2">
        ${v2}
    </div>

    <div class="resultado" id="resultado3">
        ${v3}
    </div>
    `;

    document.getElementById('linea3').innerHTML=`
    <div class="resultado" id="resultado1">
        ${v7}
    </div>

    <div class="resultado" id="resultado2">
        ${v8}
    </div>

    <div class="resultado" id="resultado3">
        ${v9}
    </div>
    `;

    tirada();
}
}

function tirada(){
    dinero=document.getElementById('creditos').innerHTML;
    gasto=5;

    total=dinero-gasto+premio;

    document.getElementById('creditos').innerHTML=`
        ${total}
    `;
}

function dineros(){   
    moneda=parseInt(document.getElementById('insertar').value);
    dinero2=parseInt(document.getElementById('creditos').innerHTML);    
    insertado=dinero2+moneda;

    document.getElementById('creditos').innerHTML=`
        ${insertado}
    `;

    document.getElementById('insertar').value="0";
}
