lista=[]
suma=0

file=open("reorder.txt","r")
file2=open("reordered.txt","w")
linea=file.readline()
linea=linea[:-1]
lista.append(linea)

for linea in file:
    linea=linea[:-1]
    lista.append(linea)

newlista=sorted(lista)    

for i in newlista:
    file2.write(i)
    file2.write("\n")
