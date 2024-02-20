#escribir un programa que permita ingresar
#una cadena de texto y posteriormente pueda 
# imprimir la cantidad de vocales.


cad=""
auxCad=""
contVocal=0
n=0 #variable para saber a cantidad de letras

print("--------------Cuenta Vocales----------------")
print("Ingrese la palabra")
cad=input()
#la funcion len trae la cantidad de letras
n=len(cad)
for k in range(n):
    if (cad[k]=="a"):
        auxCad=auxCad+"1"
    elif (cad[k]=="e"):
        auxCad=auxCad+"2"
    elif (cad[k]=="i"):
        auxCad=auxCad+"3"
    elif (cad[k]=="o"):
        auxCad=auxCad+"4"
    elif (cad[k]=="u"):
        auxCad=auxCad+"5"
    else:
        auxCad=auxCad+cad[k]
print("La cadena cifrada es: ",auxCad)       