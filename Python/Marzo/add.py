from http import server
import os

nombre=""
mayor=">"
menor="<"
lin=""

nombre=input("Escribi el nombre de tu archivo: ")



if os.path.exists ("add.txt"):
    uno=open ("add.txt","r")
    dos=open("new.html","w")
    for lin in uno:
        liNueva=lin.rstrip()
        liNueva=liNueva+mayor
        liNueva=menor+liNueva
        dos.write(liNueva)
        dos.write("\n")
    print("Ahora fijate en tu archivo")
else:
    print("Tu archivo no existe viejo.")
    