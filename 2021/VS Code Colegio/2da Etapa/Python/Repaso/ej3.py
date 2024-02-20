def creaMatriz (matriz, fila, columna):
    pass

numeros=[]
num=0
fil=0
col=0

fil=int(input("Ingrese cantidad de filas: "))
col=int(input("Ingrese cantidad de columnas: "))

numeros=creaMatriz(numeros,fil,col)

for f in range (fil):
    for c in range (col):
        print (f"Ingrese valor para numeros [{f}][{c}]: ")
numB=int(input("Ingrese el numero buscado: "))

for f in range(fil):
    for f in range(col):
        if (numB==numeros[f][c]):
            contNumero=+1
if(contNumero==0):
    print("No se encontro el numero")
else:
    print(f"El numero aparece {contNumero} veces")