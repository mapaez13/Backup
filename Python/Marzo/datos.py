#Escribir un programa que permita leer el contenido del 
# archivo e imprimir la cantidad total de correos 
#Validar cada linea como correcto o incorrecto. 
#El progama deberà ademàs crear una copia de seguridad 
# del archivo "datos.txt" con el nombre "copiaDatos.txt"

from audioop import lin2ulaw
import os
arroba="@"
punto="."
sil="sil"
edu="edu"
py="py"

nombre=input("Escribi el nombre de tu archivo: ")



if os.path.exists ("datos.txt"):
    uno=open ("datos.txt","r")
    dos=open("copiaDatos.txt","w")
    for lin in uno:
        liNueva=lin.rstrip()
        if (arroba != liNueva):
            liNueva=liNueva+arroba
            print("Tu mail no tiene @")
        if (punto != liNueva):
            liNueva=liNueva+punto
            print("Tu mail no tiene .")
        if (sil != liNueva):
            liNueva=liNueva+sil
            print("Tu mail no tiene sil")
        if (edu != liNueva):
            liNueva=liNueva+edu
            print("Tu mail no tiene edu")
        if (py != liNueva):
            liNueva=liNueva+py
            print("Tu mail no tiene py")
            dos.write(liNueva)
            dos.write("\n")
        print("Ahora fijate en tu archivo")
    else:
        print("Tu archivo esta bien")
else:
    print("Tu archivo no existe viejo")