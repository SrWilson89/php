//document.cookie="nombre=num1; expires Sat, 28  Aug 2021 00:00:00 UTC";

// localStorage.setItem('nombre','Pedro');
// localStorage.setItem('apellido1','Sanchez'); 
// localStorage.setItem('apellido2','Luna'); 
// localStorage.setItem('altura','1,85m'); 
// localStorage.setItem('sexo','Hombre'); 
// localStorage.setItem('domicilio','C/ Medellin, 8'); 
// localStorage.setItem('cp','45600');   

function pintauno(){
    document.write(`
        <div style="
        background-color: rgb(252, 255, 228);
        font-size: 2em;
        text-shadow: cyan 2px 2px 2px;
        box-shadow: darkorchid 2px 2px 2px;
        padding: 5px 15px;
        width: 50vw;"
        `)
        
    document.write('<br>')//al crear la caja por alguna razon esta primera linea no la añade o almenos no se ve
    document.write('Nombre: '+localStorage.getItem("nombre")+'<br>')
    document.write('Apellidos: '+localStorage.getItem("apellido1")+' ')
    document.write(localStorage.getItem("apellido2")+'<br>')
    document.write('Altura: '+localStorage.getItem("altura")+'<br>')
    document.write('Sexo: '+localStorage.getItem("sexo")+'<br>')
    document.write('Domicilio: '+localStorage.getItem("domicilio")+'<br>')
    document.write('Cp: '+localStorage.getItem("cp"))
    document.write(`</div>`)
}

function mdatos(){
    nombre= document.getElementById('nombre').value
    localStorage.setItem('nombre',nombre)

    apellido1= document.getElementById('apellido1').value
    localStorage.setItem('apellido1',apellido1)

    apellido2= document.getElementById('apellido2').value
    localStorage.setItem('apellido2',apellido2)

    altura= document.getElementById('altura').value
    localStorage.setItem('altura',altura)

    sexo= document.getElementById('sexo').value
    localStorage.setItem('sexo',sexo)

    domicilio= document.getElementById('domicilio').value
    localStorage.setItem('domicilio',domicilio)

    cp= document.getElementById('cp').value
    localStorage.setItem('cp',cp)
}

