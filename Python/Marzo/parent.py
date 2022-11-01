import os

uno=""
parent1="("
parent2=")"
a=0
c=0

nombre=input("Escribi el nombre de tu archivo: ")

if os.path.exists ("parent.txt"):
    uno=open ("parent.txt","r")
    for caracteres in uno:
        if (parent1 in caracteres):
            a+=1
        if (parent2 in caracteres):
            c+=1
    if(a==c):
        print("Tus parentesis estan bien")
    else:
        print("Te falta algun parentesis viejo, fijate en tu problema")           
else:
     print("Tu archivo no existe viejo.")