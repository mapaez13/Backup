lista=[]

file1=open("examenRepaso.txt","r")
file2=open("ordenadoRepaso.txt","w")
linea=file1.readline()
linea=linea[:-1]
lista.append(linea)

for linea in file1:
    linea=linea[:-1]
    lista.append(linea)

newLista=sorted(lista)

for value in newLista:
    file2.write(value)
    file2.write("\n")