import random
#juego de adivinanza de palabras con 3 oportunidades
adivinaList=["Platano","Bombilla","Araña","Mesa"]
pistaList=["Oro no es, plata no es, abre la cortina y veras lo que es",
            "Es pequeña como una pera, pero alumra la casa entera",
            "En rincones y entre ramas mis redes voy construyendo",
            "Tengo patas, pero no camino, llevo a cuestas la comida y no puedo comer"]
indiceSorteado=0
oportunidad=0
palabras=""

#el desarrollo del game
indiceSorteado=random.randint(0,3)
print("Adivinanzas- Adivinanzas- Adivinanzas- Adivinanzas- Adivinanzas- Adivinanzas-")
print("Adivinanzas- Adivinanzas- Adivinanzas- Adivinanzas- Adivinanzas- Adivinanzas-")
print("Adivinanzas- Adivinanzas- Adivinanzas- Adivinanzas- Adivinanzas- Adivinanzas-")
print("\n")
print(pistaList[indiceSorteado])
palabra=input("Ingresa la palabra:  ")
while (oportunidad <= 3):
    if (palabra==adivinaList[indiceSorteado]):
        print ("Excelente... Eres un geni@")
        break
    else:
        oportunidad=oportunidad+1
        print("No es la palabra, vuelve a intentar!")
        palabra=input("Ingrese la palabra nro. {oportunidad}...Ingrese la palabra: ")
print("Fin del juego")