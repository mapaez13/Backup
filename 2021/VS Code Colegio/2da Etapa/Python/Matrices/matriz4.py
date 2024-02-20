matriz=[]
fila=0
columna=0

print("Ingrese dimension de la matriz")
fila=int(input())
columna=fila

#crear matriz
for f in range (fila):
    matriz.append([])
    for c in range (columna):
        matriz[f].append(" * ")

#end crea matriz

#impresion matriz
for f in range (fila):
    print("\n\n")
    for c in range (columna):
        print(matriz[f][c], end="")

#carga x,y,z
for f in range (fila):
    for c in range (columna):
        if (f==c):
            matriz [f] [c]=" Y "
        if (f<c):
            matriz [f] [c]=" X "
        if (f>c):
            matriz [f] [c]=" Z "

#impresion matriz
for f in range (fila):
    for c in range (columna):
        print (matriz[f][c], end=" ")
    print ("\n\n")