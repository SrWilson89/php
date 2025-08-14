function enviar(){
    email=document.getElementById('email').value
    nombre=document.getElementById('nombreapellido').value
    asunto=document.getElementById('asunto').value

    alert(`Sr/ Sra ${nombre} recibira su contestacion sobre ${asunto} en su correo ${email} en un plazo de una semana`)

    vaciar()
}



function vaciar(){
    document.getElementById('email').value="";
    document.getElementById('nombreapellido').value="";
    document.getElementById('asunto').value="";
    document.getElementById('texto').value="";
}