from posixpath import split


claveActual=0
claveAnterior=0
lista=[]
total=0
totalAnterior=0

file=open("orderedRepaso.txt","r")
file2=open("finalRepaso.txt","w")
linea=file.readline()

linea=linea[:-1]
lista=linea.split(",")
claveActual=lista[0]
claveAnterior=claveActual
num=lista[1]
valor=num

while linea!="":
    if(claveActual==claveAnterior):
        total=total+int(num)
        linea=file.readline()
        linea=linea[:-1]
        lista=linea.split(",")
        claveActual=lista[0]
        num=lista[1]
        valor=num

    else:
        valorTotal=total+totalAnterior
        file2.write(claveAnterior)
        file2.write("\t")
        file2.write(str(total))
        file2.write("\n")
        totalAnterior=total
        total=0
        claveAnterior=claveActual
valorTotal=total+valorTotal
file2.write(claveAnterior)
file2.write("\t")
file2.write(str(total))
file2.write("\n")
file2.write("\t")
file2.write(str(valorTotal))
