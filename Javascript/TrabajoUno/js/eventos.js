var cajita= document.querySelector("#cajita");
cajita.style.width="200px";
cajita.style.height="200px";
cajita.style.background="rgb(25, 25, 112)";

/*===================================================
Eventos desde DOM
===================================================*/
var recuadro=document.querySelector(".recuadro");

function cambiarColor(){
    recuadro.style.background="red";
}

function restaurarColor(){
    recuadro.style.background="darkgreen";
}

var boton= document.querySelector("#boton");
boton.addEventListener("click",moverCaja)
function moverCaja(){
    recuadro.style.width="500px";
    recuadro.style.transition="10s";
}

var boton2= document.querySelector("#boton2");
boton2.addEventListener("click",restaurarCaja)
function restaurarCaja(){
    recuadro.style.width="100px";
    recuadro.style.transition="10s";
}