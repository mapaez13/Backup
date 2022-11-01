import os
#Se tienen almacenados en un archivo de texto
#los nombres y apellidos de los alumnos del 3er. curso
#junto con las notas en algunas materias.
#Escribir un programa que permita obtener el promedio de
#calificacion de cada alumno.
#El promedio debera ser almacenado en otro archivo .txt


file=open ("alumnos.txt","r")
file2=open("promedio.txt","w")
linea=file.readline()
linea=file.readline()
alumnos=[]
materias=6
notas=[]
comas=0
texto=""
promedio=0
suma=0
while (linea!=""):
    for k in range (len (linea)):
        if (linea[k]!=",") and(linea[k]!="\n"):
            texto=texto+linea[k]
        else:
            comas+=1
            if (comas==1):
                alumnos.append(texto)
                
                texto=""
            else:
                notas.append(texto)
                texto=""
    
    for n in range(len(notas)):
        suma=suma+int(notas[n])
    promedio=suma/materias
    file2.write(str(alumnos))
    file2.write("\t")
    file2.write(str(promedio))
    file2.write("\n")
    linea=file.readline()
    k=k+1
    notas=[]
    suma=0
    texto=""   
    promedio=0
    alumnos=[]
    comas=0

    
