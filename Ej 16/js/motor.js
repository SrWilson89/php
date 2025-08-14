numero1=parseInt(document.getElementById(`valor`).innerHTML);

function mas(){
    if(numero1>=10){
        alert("No te puedo vender mas de 10")
    }else{
        numero1++;
    
        document.getElementById(`valor`).innerHTML=(`${numero1}`);}
    
}

function menos(){
    if(numero1==0){
        alert("No te puedo vender menos de 0")
    }else{
        numero1--;
    document.getElementById(`valor`).innerHTML=(`${numero1}`);}
}

function mostrar(){

    var texto=document.getElementById('buscar').value;

    alert(texto);
}

function comprobarCorreo(correo){
    var posArroba, posPunto;
    posArroba=correo.indexOf('@');
    if(posArroba==-1){
        return false;
    }
    posPunto=correo.lastIndexOf('.');
    if(posPunto==-1 || posPunto<posArroba){
        return false;
    }
    return true;
}

function comprobarFormulario(){
    var correo;
    var edad;
    texto=document.getElementById('correo').value
    edad=document.getElementById('edad').value

    if(comprobarCorreo(texto)==false){
        alert('Correo incorrecto')
        return false;
    }
    else{
        if(isNaN(edad)){
            alert('La edad tiene que ser un numero');
            return false;
        }
        else{
            if(edad>65 || edad<18){
                alert('Edad fuera de los limites')
                return false;
            }
        }
    }
    return true;
}

function mostrar(num){
    var pos=num;
    y=parseInt(document.getElementById(`mc${pos}`).value)

    if(y==0){
    document.getElementById(`contenedor${pos}`).style.display="table";
    y++;
    document.getElementById(`mc${pos}`).value=y;
    }else{
        document.getElementById(`contenedor${pos}`).style.display="none";
        y--;
        document.getElementById(`mc${pos}`).value=y;
    }

}

function cantidad(){
    final=4;

    for(x=1;x<=final;x++){
        mostrar(x)
    }
}

cantidad();

function array(){
    var animales=new Array(10);

    animales[0]="gato";
    animales[1]="perro";
    animales[2]="loro";
    animales[3]="gallina";
    animales[4]="codorniz";
    animales[5]="pavo";
    animales[6]="pollito";
    animales[7]="gallo";
    animales[8]="salamandra";
    animales[9]="moscas";
    

    document.getElementById(`contenedor4`).innerHTML+=`<br>${animales}<br> `;
    document.getElementById(`contenedor4`).innerHTML+=`${animales.length}<br>`;

    for(x=0;x<animales.length;x++){
        document.getElementById(`contenedor4`).innerHTML+=`${animales[x]}<br>`
    }
}

function array2(){
    
    var alumnos=new Array();

    alumnos[0]="Alvaro";
    nuevoalumno=prompt(`Dime el nombre`);
    alumnos.push(nuevoalumno);
    
    // document.getElementById(`contenedor4`).innerHTML="";
    
    for(x=0;x<alumnos.length;x++){
        document.getElementById(`contenedor4`).innerHTML+=`${alumnos[x]}<br>`
    }

}