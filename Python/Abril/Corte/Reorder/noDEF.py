claveAnterior=0
claveActual=0
total=0
linea=[]


try:
    archivo=open("reorder.txt","r")
    archivo2=open("reordered.txt","a")
    linea=archivo.readline()
    lista=linea.split(",")


    val=lista[-1]
    valor=val[:-1]
    claveActual=lista[0]
    claveAnterior=claveActual
    
    while (linea!=""): 
        #lista=lista[:-1]
        if (claveAnterior==claveActual):

            total=total+int(valor)         
            linea=archivo.readline()
            lista=linea.split(",")
            
            val=lista[-1]
            valor=val[:-1]
            claveActual=lista[0]
            claveAnterior=claveActual
        else:

            archivo2.write(claveAnterior)
            archivo2.write("\t")
            archivo2.write(str(total))
            archivo2.write("\n")
            total=0
            claveAnterior=claveActual


    archivo2.write(claveAnterior)
    archivo2.write("\t")
    archivo2.write(str(total))
    archivo2.write("\n")
    total=0

except IOError:
    print ("Error")