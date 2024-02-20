#Escribir un programa que permita ingresar 2 numeros A y B e imprima el mayor, menor y/o si son iguales
A=0
B=0
print("Ingrese los numeros")
A= int (input())
B= int (input())
if (A>B):
    print("El primer numero ingresado es mayor que el segundo")
elif (A<B):
    print("El segundo numero ingresado es menor que el primero")
else:
    print("Los dos numeros son iguales")


