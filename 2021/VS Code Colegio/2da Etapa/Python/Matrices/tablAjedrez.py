from fmatriz import *
FILA=8
COLUMNA=8
tablero=[]
fa=0
ca=0

creaMatriz(tablero,FILA,COLUMNA)
cargaMatriz(tablero,FILA,COLUMNA,"*")
imprimirMatriz(tablero,FILA,COLUMNA)
print ("Ingrese Fila y Columna del Alfil")
fa=int(input())
ca=int (input())
tablero[fa-1][ca-1]="A"
print ("////////////////////////////////////////////////")
imprimirMatriz(tablero,FILA,COLUMNA)
print ("LAS DIFERENTES POSICIONES DONDE SE PUEDE MOVER EL ALFIL SON: ")
resta=fa-ca
suma=fa+ca
for f in range (FILA):
    for c in range (COLUMNA):
        if (f-c==resta):
            tablero[f][c]="A"
        if (f+c==suma ):
               tablero[f][c]="A"

imprimirMatriz(tablero,FILA,COLUMNA)
#CONSIDERAR QUE EL USUARIO PUEDA INGRESAR
#UN PEON, "P" Y EL PROGRAMA DEBE AVISARLE QUE EL
#EL PEON SERA DESPLAZADO POR EL ALFIL, Y MOVER 
#EL ALFIL EN EL LUGAR DEL PEON.

creaMatriz(tablero,FILA,COLUMNA)
cargaMatriz(tablero,FILA,COLUMNA,"*")
imprimirMatriz(tablero,FILA,COLUMNA)

print("Ingrese fila y columna del peon")
fa=int(input())
ca=int (input())
tablero[fa-1][ca-1]="P"

print ("////////////////////////////////////////////////")
imprimirMatriz(tablero,FILA,COLUMNA)
print("El peon sera desplazado por el alfil, y el alfil tomara el lugar del peon")

