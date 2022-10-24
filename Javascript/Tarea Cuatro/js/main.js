function circulo() {
    var c = document.getElementById("caja");
    var cir = c.getContext("2d");
    cir.beginPath();
    cir.arc(95,50,40,0,2*Math.PI);
    cir.stroke();
  }
function cuadrado(){
  var c = document.getElementById("caja");
  var cuad = c.getContext("2d");
  cuad.beginPath();
  cuad.rect(20, 20, 150, 100);
  cuad.stroke();
}
function triangulo(){
  var c = document.getElementById("caja");
  var tri = c.getContext("2d");
  tri.beginPath();
  tri.moveTo(50, 50);
  tri.lineTo(50, 100);
  tri.lineTo(100, 100);
  tri.closePath();
  tri.stroke();
}