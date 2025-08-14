function crear(){

    datos=document.getElementById('facilitador').value;

    document.getElementById('acortador').innerHTML+=`
    
    <div class="js-copytextarea">
    ${datos}        
    </div>
    
    `   
    ;
    sustituir();
}

function sustituir(){
    document.getElementById('facilitador').value="";

    document.getElementById('facilitador').value=`    
<br><br>

<br><br>

<br><br>
    `; 
}


