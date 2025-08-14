function uno(){
    num=parseInt(prompt(`elige un numero de inicio`));
    max=parseInt(prompt(`elige un numero final`));
    
    document.write(`<div style="display: flex; width: 100%;flex-wrap: wrap;justify-content:space-around;">`);
    while(num<=max){
        if(num%3==0){
            document.write(`
            <p style="display: flex; align-items: center;justify-content: center;background-color: black; color: #f5f6fa; width: 25px; height: 25px; border-radius: 25px; border: black 2px solid;">${num}</p>
            `);
        }
        else{
            document.write(`
            <p style="display: flex;align-items: center;justify-content: center;text-align: center;background-color: #f5f6fa; width: 25px; height: 25px; border-radius: 25px; border: black 2px solid;">${num}</p>
            `)
        }
        num++;
    }
    document.write(`saliste del bucle`);
    document.write(`</div>`);
}

function dos(){
opcion=0;
num1=Math.round(1+Math.random()*(7-1));
num2=Math.round(1+Math.random()*(7-1));
multi=num1*num2;

do{
    if(opcion==0){
        opcion=prompt(`multiplica ${num1} * ${num2}`);
    }
    else{
        opcion=prompt(`Usa la calculadora para multiplicar ${num1} * ${num2}`);
    }

}while(opcion!=multi);
}

function tres(){
    y=prompt(`elige un final`);

    for(x=0;x<=y;x++){
        document.write(`el numero es ${x} <br>`);
    }
}

function cuatro(){
    y=prompt(`elige un numero`)

    resultado=1;
    for(x=y;x>0;x--){
        document.write(`${x}*${resultado}=`);
        resultado=resultado*x;
        document.write(`${resultado} <br>`);
        
    }
}

function cinco(){
    x=parseInt(prompt(`elige un numero de inicio`));
    y=parseInt(prompt(`elige un numero final`));

    if(x<y){
        suma=0;
        document.write(`La suma de `);
        for(var x=x; x<=y; x++){
            document.write(`${x} + `);
            suma+=parseInt(x);
        }
        document.write(`el valor de ${suma} <br>`);
    }else{
        alert("Numero de inicio debe ser mas pequeño, que eres un ZORRUNO")
    }
}

function seis(){

    for(x=10;x<100;x=x+10){
        document.write(`<p style="color: red; font-size: 2em;">${x}</p>`)
        for (y=x+1;y<(x+10);y++){
            if(y%2==0){
                document.write(`<p style="color: green; text-indent: 50px;font-size: 2em;">${y}</p>`) 
            }else{
            document.write(`<p style="color: blue; text-indent: 50px;font-size: 2em;">${y}</p>`)}    
        }
    }
}

function siete(){
    for(x=1;x<100;x++){
        if(x%7==0){
            document.write(`<p style="color: green; text-indent: 50px;font-size: 2em;">${x}</p>`); 
        }else if(x%5==0){
            document.write(`<p style="color: blue; text-indent: 50px;font-size: 2em;">${x}</p>`);
        }else if(x%2==0){
            document.write(`<p style="color: #e67e22; text-indent: 50px;font-size: 2em;">${x}</p>`);
        }else{
            document.write(`<p style="color: #8e44ad; text-indent: 50px;font-size: 2em;">${x}</p>`)
            }
    }
}

function ocho(){
    num1=parseInt(prompt(`elige un numero de inicio`));
    num2=parseInt(prompt(`elige un numero final`));

        if(num1<num2){
        document.write(`<div style="
            width: 95vw;
            background-color: #ecf0f1;
            border-radius: 20px;
            margin: 5px;
            border: 5px double plum ;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;">`)
        for (y=num1; y<=num2; y++){
            document.write(`<div style="
            width: 25vh;
            background-color: #9b59b688;
            border-radius: 20px;
            margin: 5px;
            border: 5px double plum ;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;">`)
            for (x=1; x<=10; x++){
                if((x*y)%2==0){
                    document.write(`<p style="
                    width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;"> ${y} * ${x} = <span style="text-shadow: white 2px 2px 2px; color: black;">${x*y}</span> </p><br>`);
                }else{
                    document.write(`<p> ${y} * ${x} = <span style="text-shadow: red 2px 2px 2px;">${x*y}</span> </p><br>`);
                }
            }
            document.write(`</div>`)
        }
        document.write(`</div>`)
    }
    else{
        //alert("El primer numero tiene que ser menor que el segundo CAMPEON")
        document.write(`<div style="
            width: 95vw;
            background-color: #ecf0f1;
            border-radius: 20px;
            margin: 5px;
            border: 5px double plum ;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;">`)
        for (y=num2; y<=num1; y++){
            document.write(`<div style="
            width: 25vh;
            background-color: #9b59b688;
            border-radius: 20px;
            margin: 5px;
            border: 5px double plum ;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;">`)
            for (x=1; x<=10; x++){
                if((x*y)%2==0){
                    document.write(`<p style="
                    width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;"> ${y} * ${x} = <span style="text-shadow: white 2px 2px 2px; color: black;">${x*y}</span> </p><br>`);
                }else{
                    document.write(`<p> ${y} * ${x} = <span style="text-shadow: red 2px 2px 2px;">${x*y}</span> </p><br>`);
                }
            }
            document.write(`</div>`)
        }
        document.write(`</div>`)
    }
}

function nueve(){
    num1=parseInt(prompt(`Elige una funcion disponible`));
    if(num1==1){uno()}
    else if(num1==2){dos()}
    else if(num1==3){tres()}
    else if(num1==4){cuatro()}
    else if(num1==5){cinco()}
    else if(num1==6){seis()}
    else if(num1==7){siete()}
    else if(num1==8){ocho()}
    else{"Numeros validos 1 a 8"};
}

function diez(){
var simbolos;

simbolos = "0123456789ABCDEF";

y=parseInt(prompt(`Elige un final`));

for (x=1;x<=y;x++){
    
    document.write+=(`<div id="caja${x}"></div>`);
    colorx="#";

    for(var i = 0; i < 6; i++){color1 = color1+ simbolos[Math.floor(Math.random() * 16)];}

    document.getElementById('caja1').style.background=color1;

    }
}