

var img = document.getElementById("img");
var cont = document.getElementById("uno");
img.addEventListener("dragend",cambiarColor);

function cambiarColor(){
    cont.style.background="yellow";
}

img.ondragstart= function(){
    console.log("Op");
}
img.addEventListener("dragstart",startMovement)
function startMovement(){
    //container.style.backgroundColor("green");
    console.log("pego");
}
img.ondragend= function(){
    //container.style.backgroundColor("red");
    console.log("off")
}