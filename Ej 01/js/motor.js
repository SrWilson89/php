function boton(){
    document.getElementById('enlaces').style.display= "table";
}

function enlaces(){
    valor1=prompt('Primer enlace');
    valor2=prompt('Segundo enlace');
    valor3=prompt('Tercero enlace');
    valor4=prompt('Cuarto enlace');
}

enlaces();

function ahorrador(){

document.write(`
<script>
function boton(){
    document.getElementById('enlaces').style.display= "table";
}
</script>
<style>
*{
    margin: 0px;
    padding: 0px;
}

.pack{
    width: 100%;
    padding: 10px;
    min-height: 50px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
}

button{
    font-size: 2em;
    padding: 5px 15px;
}

.boto{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
}

#enlaces{
    display:none;
    flex-wrap: wrap;
}
</style>


<div class="pack">
<div class="boto">
    <button onclick="boton()">
        Mostrar
    </button>   
</div>


<div id="enlaces">

    <a href="
    ${valor1}
    ">
    ${valor1}
    </a>

    <br><br>

    <a href="
    ${valor2}
    ">
    ${valor2}
    </a>

    <br><br>

    <a href="
    ${valor3}
    ">
    ${valor3}
    </a>

    <br><br>

    <a href="
    ${valor4}
    ">
    ${valor4}
    </a>

</div>

</div>

`);

}

ahorrador();