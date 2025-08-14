function pintar(){
let d = new Date();
document.getElementById("date").innerHTML =
`<h1>Hora actual: ${d.getHours()}:${d.getMinutes()}:${d.getSeconds()} </h1>`
}

pintar();