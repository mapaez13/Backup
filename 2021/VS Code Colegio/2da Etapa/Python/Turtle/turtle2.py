from turtle import *
def dibujaVentana(posX,posY):
    setup (300,600, 500, 380)
    screensize(posX,posY)
    pausa=print("Presione cualquier tecla para continuar...")
    return

#main
x=0
y=0
pausa=""
x=int(input("Ingrese el ancho de la ventana: "))
Y=int(input("Ingrese el largo de la ventana: "))
dibujaVentana (x,y)
pausa=(input("Presiona aqui para continuar..."))
