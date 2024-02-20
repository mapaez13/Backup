def imprimeCabecera():
    print ("""
            -------------------------------------------------
            -       PLANILLA DE VENTA DE VEHICULOS          -
            -           PEDRO`S AUTOMOTORES                 -
            -------------------------------------------------
    """)
    return

def cabecera():
    print ("""
            -------------------------------------------------
            -              ADIVINADOR DE NUMEROS            -
            -------------------------------------------------
    """)
    return

def inputMatriz(matriz, fila, columna):
    valor=""
    for f in range (fila):
        for c in range (columna):
            print (f"Ingrese Valor para Matriz[{f+1}][{c+1}]: ")
            valor=input()
            matriz[f][c]=valor
    return (matriz)
def creaMatriz (matriz,fila,columna):
    for f in range (fila):
        matriz.append([])
        for c in range (columna):
            matriz[f].append(None)
    return (matriz)

def imprimirMatriz (matriz,fila,columna):
    for f in range (fila):
        for c in range (columna):
            print (matriz[f][c], end=" ")
        print ("\n")
    return 

def cargaMatriz (matriz, fila, columna,elemento):
    for f in range (fila):
        for c in range (columna):
            matriz[f][c]=elemento
    return (matriz)

def ahorcado (x):
    if (x==1):
        print("""
        |-----------
        |          |
        |        ('_')
        |
        |
        |
        """)
    if (x==2):
        print("""
        |-----------
        |          |
        |        ('_')
        |         !|
        |
        |
        """)
    if (x==3):
            print("""
        |-----------
        |          |
        |        ('_')
        |         !|!
        |
        |
        """)
        
    return