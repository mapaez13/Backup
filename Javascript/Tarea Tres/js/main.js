let img= document.getElementById("img");
let container= document.getElementById("uno");

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