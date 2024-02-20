from fmatriz2 import *
import random

palabras=["flecha","basket","sapo"]

adivina=[["*","*","*","*","*","*","*"],

         ["*","*","*","*","*","*","*"],

         ["*","*","*","*"]]

sorteo=random.randint(0,2)
intentos=0
error=0
aciertos=0
cantidad=len(palabras[sorteo])

while(intentos<=3) and (error!=3):
    letra=input("Ingresa una Letra: ")
    if (letra in palabras[sorteo]):
        aciertos=aciertos+1
        for k in range (len(palabras[sorteo])):
            if (letra==palabras[sorteo][k]):
                adivina[sorteo][k]=letra
        print (adivina[sorteo])
        if(aciertos==cantidad):
            print("Lograste!!!!")
    else:
        error+=1
        if (error==1):
            ahorcado (1)
        if (error==2):
            ahorcado (2)
        if (error==3):
            ahorcado (3)
            print("No adivinaste, intenta de nuevo")
            break
        