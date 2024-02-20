#escribir un programa que permita ingresar
#una cadena de texto y posteriormente pueda 
# imprimir la cantidad de vocales.


cad=""
contVocal=0
n=0 #variable para saber la cantidad de letras

print("--------------Cuenta Vocales----------------")
print("Ingrese la palabra")
cad=input()
#la funcion len trae la cantidad de letras
n=len(cad)
for k in range(n):
    if (cad[k]=="a") or (cad[k]=="e") or (cad[k]=="i") or (cad[k]=="o") or (cad[k]=="u"):
        contVocal= contVocal+1
#fin del for

print("Cantidad de Vocales es: ",contVocal)