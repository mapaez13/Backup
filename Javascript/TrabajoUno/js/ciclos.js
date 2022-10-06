//sintaxis del usp de ciclos de javascript
//for

var cajas=document.querySelectorAll(".cajas");
console.log(cajas)
console.log(cajas[0])
for(var i=0;i<cajas.length;i++){
    cajas[i].style.width="50px";
    cajas[i].style.height="50px";
    cajas[i].style.background="rgb(48,67,33)";
    cajas[i].style.margin="10px";
}