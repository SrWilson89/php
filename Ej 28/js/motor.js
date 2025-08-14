var elementos = document.getElementsByTagName('a');

var elementos2 = document.getElementsByTagName('input');



function cambiaTexto(){
    var valor = document.getElementById('texto').value;

    document.getElementsByTagName('a')[2].innerHTML=valor;
}

function marcar(){
    var items = document.getElementsByClassName('items');
    document.getElementsByClassName('items')[0].getAttribute('disabled');

    for(x=0;x<items.length;x++){
        if(document.getElementsByClassName('items')[x].getAttribute('disabled')){
            document.getElementsByClassName('items')[x].removeAttribute('disabled')
        }else{
            document.getElementsByClassName('items')[x].setAttribute('disabled', true);    
        }        
    }
}

function respuesta(){
    var items = document.getElementsByClassName('items');
    
    for(x=0;x<items.length;x++){
        if(document.getElementsByClassName('items')[x].checked){
            alert(`la posicion es ${x}`)
        }   
    }

    marcar();

}