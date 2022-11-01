claveAnterior=0
claveActual=0
total=0
linea=[]

def corte():
    global total
    global claveAnterior
    global claveActual
    archivo2.write(str(claveAnterior))
    archivo2.write("\t")
    archivo2.write(str(total))
    archivo2.write("\n")
    total=0
    return
def valores():
    global valor
    global claveActual
    global claveAnterior
    val=lista[-1]
    valor=val[:-1]
    claveActual=lista[0]
    return
    

def antesdevalores():
    global total
    global lista
    global linea
    total=total+int(valor)         
    linea=archivo.readline()
    lista=linea.split(",")
    return

try:
    archivo=open("RepasoFinalV1.txt","r")
    archivo2=open("resumen.txt","a")
    linea=archivo.readline()
    lista=linea.split(",")

    valores()
    
    while (linea!=""): 
        #lista=lista[:-1]
        if (claveAnterior==claveActual):
            antesdevalores()
            valores()
        else:
           corte()
           claveAnterior=claveActual
           
    corte()

except IOError:
    print ("Error")