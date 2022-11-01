nombre=""
contador=0

nombre= input("Ingrese nombre del archivo: ")

try:
    archivo=open (nombre,"r")
    linea= archivo.readline()
    while linea!="":
        contador+=1
        linea= archivo.readline()
    print(f"El archivo tiene {contador} lineas")
    archivo.close()
except IOError:
    print("El archivo no existe")