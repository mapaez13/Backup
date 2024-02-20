from fmatriz import*
from random import*
import os

matriz=[]
matriz2=[]
num=0

creaMatriz(matriz,5,5)
creaMatriz(matriz2,5,5)

for f in range(5):
    for c in range(5):
        matriz2[f][c]="*"
        num=randint(1,10)
        matriz[f][c]=num

cabecera()

intentos=0
numero=0

while(intentos>5):
    for f in range (5):
        for c in range(5):
            print("*",end=" ")
        print("\n")
    print("Adivina la mayor cantidad de veces")
    numero=int(input())
    for f in range(5):
        for c in range(5):
            if(numero==matriz[f][c]):
                matriz2[f][c]=matriz[f][c]
    os.system("cls")
    print("Esto tenes por el momento")
    intentos+=1