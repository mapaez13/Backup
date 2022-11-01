#Corte de Control
#BEGIN
# ASSIGN (ArchEmpleados,’C:\EMPLEADO.DAT’);
# RESET (ArchEmpleados);
# LeerRegistro (ArchEmpleados, RegEmpleado, Fin);
# WHILE NOT(Fin) DO
# BEGIN
# CategoriaAnt := RegEmpleado.Categoria;
# WRITE (Lst, CategoriaAnt);
# WHILE ((NOT(Fin)) AND (CategoriaAnt = RegEmpleado.Categoria)) DO
# BEGIN
# WRITE (Lst, RegEmpleado.Nombre);
# LeerRegistro (ArchEmpleados, RegEmpleado, Fin)
# END
# END
#END.

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
    total=total+int(dec)      
    linea=archivo.readline()
    lista=linea.split(",")
    return

def binAdec(bin):
    dec=0
    exp=0
    for i in range(len(bin)-1,-1,-1):
        if (bin[i]=="1"):
            dec=dec+(1*(2**exp))
        exp=exp+1
    return (dec)

try:
    archivo=open("binarios.txt","r")
    linea=archivo.readline()
    lista=linea.split(",")

    val=lista[1]
    valor=val[:-1]
    claveActual=lista[0]
    claveAnterior=claveActual
    while (linea!=""): 
        #lista=lista[:-1]
        if (claveAnterior==claveActual):
            dec=binAdec(valor)
            antesdevalores()
            valores()
        else:
           corte()
           claveAnterior=claveActual
    print (claveAnterior, "Total: ", total)
    total=0
    claveAnterior=claveActual 

except IOError:
    print ("Error")