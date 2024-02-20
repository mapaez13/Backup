from fmatriz import*
casas=[['c1','c6','c11','c16'],
          ['c2','c7','c12','c17'],
          ['c3','c8','c13','c18'],
          ['c4','c9','c14','c19'],
          ['c5','c10','c15','c20',]]
solicitar=""
cancelar=""

fil=0
col=0

opcion=1
while (opcion==input):
    print("""
    SELECCIONE LA OPCIÓN DESEADA
    ============================
    S- Solicitar Señal
    N- Cancelar Señal
    L- Listar Casa con Solicitud
    X- Salir
    """)
    opcion=input()
    if (opcion=="S"):
        solicitar (casas)
    if (opcion=="N"):
        imprimirMatriz(casas,fil,col)
    if (opcion=="L"):
        cancelar (casas)
    if (opcion!="S" and opcion!="N" and opcion!="L" and opcion!="X"):
        print ("Inrese de nuevo")

print(casas)