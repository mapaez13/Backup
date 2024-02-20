#creacion de una matriz 
matriz=[]
fila=0
colum=0
print ("Ingrese dimension de fila y columna")
fila=int (input())
colum=int (input())

#CREAR MATRIZ
for f in range (fila):      # ciclo que inicia con f valiendo 0..1...2
    matriz.append ([])   #añade un [] a matriz 
    for c in range(colum):   # ciclo que inicia con c valiendo 0..1...2
        matriz[f].append (None)  

#impresion de una matriz
for f in range (fila):
    for c in range (colum):
        print (matriz[f][c], end=" ")
    print ("\n")  

#cargar una matriz por teclado
for f in range (fila):      # ciclo que inicia con f valiendo 0..1...2
    for c in range(colum):   # ciclo que inicia con c valiendo 0..1...2
        num=int(input(f"Ingrese valor para matriz [{f}][{c}]: "))
        matriz[f][c]=(num)  

#impresion de una matriz
for f in range (fila):
    for c in range (colum):
        print (matriz[f][c], end=" ")
    print ("\n")  