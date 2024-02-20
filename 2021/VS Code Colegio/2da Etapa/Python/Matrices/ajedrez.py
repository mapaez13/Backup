from fmatriz import*

tablero=[]
fila=8
columna=8
elemento=" x "

creaMatriz(tablero,fila,columna)
cargaMatriz(tablero,fila,columna,elemento)
tablero[3][3]=" A "
imprimirMatriz(tablero,fila,columna)