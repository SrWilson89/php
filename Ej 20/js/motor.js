for(x=0;x<10;x++){
    document.getElementById('ejercicio1').innerHTML+=`${x} `
};

for(x=100;x<200;x++){
    document.getElementById('ejercicio2').innerHTML+=`${x} `
};

for(x=5;x<21;x=x+3){    
    document.getElementById('ejercicio3').innerHTML+=`${x} `    
};

function cuatro(){
    num=parseInt(prompt('di un numero'));    
    num2=(((num*2)-1));

    if(num<=0){
        alert('ingresa un numero positivo')
    }else{
        for(x=num;x<=num2;x++){
            document.getElementById('ejercicio4').innerHTML+=`${x} `
        }
    }
}

function cinco(){
    cantidad=parseInt(prompt('di un numero de repeticiones'));
    total=0;

    if(cantidad<=0){
        alert('ingresa un numero positivo')
    }else{
        for(x=1;x<=cantidad;x++){
            numerito=parseInt(prompt('di un numero'))
            total+=numerito
        }
        document.getElementById('ejercicio5').innerHTML=`${total}`;
    }
}

function seis(){

    valor=prompt("Dame tu frase");
    miArray=[];
    miArray=valor.split("");

    document.getElementById('ejercicio6').innerHTML="";

    vocalA=0;
    vocalE=0;
    vocalI=0;
    vocalO=0;
    vocalU=0;

    for(x=0;x<miArray.length; x++){
        if(miArray[x]=="a"){
            if(vocalA==0){
                document.getElementById('ejercicio6').innerHTML+="a"
                vocalA++
            }
        }

        else if(miArray[x]=="e"){
            if(vocalE==0){
                document.getElementById('ejercicio6').innerHTML+="e"
                vocalE++
            }
        }

        else if(miArray[x]=="i"){
            if(vocalI==0){
                document.getElementById('ejercicio6').innerHTML+="i"
                vocalI++
            }
        }

        else if(miArray[x]=="o"){
            if(vocalO==0){
                document.getElementById('ejercicio6').innerHTML+="o"
                vocalO++
            }
        }

        else if(miArray[x]=="u"){
            if(vocalU==0){
                document.getElementById('ejercicio6').innerHTML+="u"
                vocalU++
            }
        }
    };
}

function siete(){
    valor=prompt("Dame tu frase");
    miArray=[];
    miArray=valor.split("");

    document.getElementById('ejercicio7').innerHTML="";

    vocalA=0;
    contarA=0;

    vocalE=0;
    contarE=0;

    vocalI=0;
    contarI=0;

    vocalO=0;
    contarO=0;

    vocalU=0;
    contarU=0;

    for(x=0;x<miArray.length; x++){
        if(miArray[x]=="a"){
            if(vocalA==0){
                document.getElementById('ejercicio7').innerHTML+=`<div id="letraA">a</div>`
                vocalA++
            }
            contarA++
        }

        else if(miArray[x]=="e"){
            if(vocalE==0){
                document.getElementById('ejercicio7').innerHTML+=`<div id="letraE">e</div>`
                vocalE++
            }
            contarE++
        }

        else if(miArray[x]=="i"){
            if(vocalI==0){
                document.getElementById('ejercicio7').innerHTML+=`<div id="letraI">i</div>`
                vocalI++
            }
            contarI++
        }

        else if(miArray[x]=="o"){
            if(vocalO==0){
                document.getElementById('ejercicio7').innerHTML+=`<div id="letraO">o</div>`
                vocalO++
            }
            contarO++
        }

        else if(miArray[x]=="u"){
            if(vocalU==0){
                document.getElementById('ejercicio7').innerHTML+=`<div id="letraU">u</div>`
                vocalU++
            }
            contarU++
        }
   };

    document.getElementById('letraA').innerHTML=`a = ${contarA}`
    document.getElementById('letraE').innerHTML=`e = ${contarE}`
    document.getElementById('letraI').innerHTML=`i = ${contarI}`
    document.getElementById('letraO').innerHTML=`o = ${contarO}`
    document.getElementById('letraU').innerHTML=`u = ${contarU}`

}

function ocho(){
    document.getElementById('ejercicio8').innerHTML="";
    total=0;
    for(x=0;x<=100;x++){
        if(x<100){
            document.getElementById('ejercicio8').innerHTML+=`${x} + `
        }else{
            document.getElementById('ejercicio8').innerHTML+=`${x} = `
        }
        total+=x
    }
    
    document.getElementById('ejercicio8').innerHTML+=`${total}`

}

ocho();

function nueve(){

    document.getElementById('ejercicio9').innerHTML="";

    total=0;
    for(x=0;x<=100;x++){
        if(x%3==0){
            if(x<99){
            document.getElementById('ejercicio9').innerHTML+=`${x} + `
            }else{
                document.getElementById('ejercicio9').innerHTML+=`${x} = `
            }
            total+=x
        }
                
    }
    
    document.getElementById('ejercicio9').innerHTML+=`${total}`
}

nueve();

function diez(){

    y=prompt(`elige un numero para ser factorizado`)

    resultado=1;
    z=1;
    for(x=y;x>0;x--){
        
        if(z==1){
            z++;
            resultado=resultado*x
        }else{
        document.getElementById('ejercicio10').innerHTML+=`
        ${x}*${resultado}
        `;        
        resultado=resultado*x
        document.getElementById('ejercicio10').innerHTML+=`
        =${resultado} <br>
        `;}
    }
}

function once(){

    valor=prompt("Dame tu frase");
    miArray=[];
    miArray=valor.split("");

    document.getElementById('ejercicio6').innerHTML="";

    total=0;

    for(x=0;x<miArray.length; x++){
        if(miArray[x]=="a"){
            total++
        }

        else if(miArray[x]=="e"){
            total++
        }

        else if(miArray[x]=="i"){
            total++
        }

        else if(miArray[x]=="o"){
            total++
        }

        else if(miArray[x]=="u"){
            total++
        }
    };

    document.getElementById('ejercicio6').innerHTML=total;
}