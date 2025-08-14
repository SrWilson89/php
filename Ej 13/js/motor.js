nota1=parseInt(prompt("Numero del 1 al 7"));

if (nota1>=1 && nota1<=7){
    switch(nota1){
        case 1:
            document.write("Lunes");
        break;

        case 2:
            document.write("Martes");
        break;

        case 3:
            document.write("Miercoles");
        break;

        case 4:
            document.write("Jueves");
        break;

        case 5:
            document.write("Viernes");
        break;

        case 6:
            document.write("Sabado");
        break;

        case 7:
            document.write("Domingo");
        break;
    }
}else{
    alert("Va a ser que no admito esos numeros")
}