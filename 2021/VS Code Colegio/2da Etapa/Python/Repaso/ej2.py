#Escribe un programa que pida nueve
#números enteros y los almacene en una matriz 3x3.
#Calcula la suma de los números de cada fila y
#mostrar por pantalla el número de fila con mayor
#suma.
from fmatriz2 import *

FILA=3
COLUMNA=3
k=0
suma=0
sumaMayor=0
sumaMayorFila=0
sumaFila1=0
sumaFila2=0
sumaFila3=0
fila=[]

matriz=[]
creaMatriz(matriz,FILA,COLUMNA)
for f in range (FILA):
    for c in range (COLUMNA):
        k+=1
        matriz[f][c]=int(input(f"Ingrese {k} Número: "))

acum=0
for f in range(FILA):
    for c in range(COLUMNA):
        acum=acum+matriz[f][c]
    print(f"{fila[f+1]}: {acum}")

for f in range (FILA):
    suma=0
    for c in range (COLUMNA):
        suma+=matriz[f][c]
    if (suma>sumaMayor):
        sumaMayor=suma
        sumaMayorFila=f
imprimirMatriz(matriz,FILA,COLUMNA)

print(f"La Mayor Suma está en la fila: {sumaMayorFila+1}")