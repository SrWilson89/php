function calcular(){
    horas=document.getElementById('horas').value;
    precio=document.getElementById('precio').value;
    horas=parseInt(horas);
    precio=parseInt(precio);

    thp=parseInt(horas*precio);

    total=document.getElementById(`total`);
    total.innerHTML="";
    total.innerHTML=`${thp} €`;
}