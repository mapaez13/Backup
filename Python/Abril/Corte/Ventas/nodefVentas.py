claveAnterior=0
claveActual=0
total=0
linea=[]

def corte():
    global total
    global claveAnterior
    global claveActual
    print(claveAnterior, "total: ", total)
    total=0
    return
def valores():
    global valor
    global claveActual
    val=lista[-1]
    valor=val[:-1]
    claveActual=lista[0]

def antesdevalores():
    global total
    global lista
    global linea
    total=total+int(valor)         
    linea=archivo.readline()
    lista=linea.split(",")
    return

try:
    archivo=open("ventas.txt","r")
    linea=archivo.readline()
    lista=linea.split(",")

    val=lista[1]
    valor=val[:-1]
    claveActual=lista[0]
    claveAnterior=claveActual
    while (linea!=""): 
        #lista=lista[:-1]
        if (claveAnterior==claveActual):
            antesdevalores()
            valores()
        else:
           print(claveAnterior, "total: ", total)
        total=0
        claveAnterior=claveActual
    
    print(claveAnterior, "total: ", total)
    total=0

except IOError:
    print ("Error")