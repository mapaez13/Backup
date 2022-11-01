import os
lista=[]

file1=open("examenRepaso.txt" , "r")
file2=open("orderedRepaso.txt" , "w")
linea=file1.readline()
linea=linea[:-1]
lista.append(linea)

for linea in file1:
    linea=linea[:-1]
    lista.append(linea)

newlista=sorted(lista)

for i in newlista:
    file2.write(i)
    file2.write("\n")
    