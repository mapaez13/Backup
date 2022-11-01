import os
nombre=""
contador=0

nombre= input("Ingrese nombre del archivo: ")

if os.path.exists (nombre):
    archivo=open (nombre,"r")
    linea= archivo.readline()
    while linea!="":
        contador+=1
        linea= archivo.readline()
    print(f"El archivo tiene {contador} lineas")
    archivo.close()

else:
    print ("El archivo no existe")