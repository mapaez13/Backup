#escribir un programa que solicite al usuario que ingrese 3 palabras en 3 variables diferentes, 
#posteriormente mostrar el mensaje sobre una pista sobre una de las palabras ingresadas,
#si esa palabra esta en una de las 3 variables, mostrar el mensaje "CORRECTO", de lo contrario mostrar
#el mensaje "INCORRECTO"

pal1="Basquetbol"
pal2="Basketball"
pal3="Basquet"
pal4="Basket"
pal5="Volleyball"
pal6="Voleibol"
pal7="Volley"
pal8="Voley"
pal=""

print("=====================================================")
print("=           ADIVINA LAS SIGUIENTES PALABRAS         =")
print("=====================================================")

print("La 1ra palabra, es un deporte. Un deporte donde se utiliza una canasta y se lanza en ella para hacer puntos")
pal=input()
if (pal==pal1 or pal==pal2 or pal==pal3 or pal==pal4):
    print("CORRECTO")
else:
    print("INCORRECTO")

print("......")
print("......")
print("......")

print("2DA PALABRA")
print("Esta segunda palabra, tambien es un deporte. Este deporte tambien se juega con las manos y tiene una red que divide la cancha, y puedes hacer maximo tres pases para pasar al lado contrario")
pal=input()
if (pal==pal5 or pal==pal6 or pal==pal7 or pal==pal8):
    print("CORRECTO")
else:
    print("INCORRECTO")