#Crear una caluladora que permita realizar
#las operaciones básicas
#suma-resta-multiplicacion-división
#la calculadora, deberà mostrar un menú con la 
#opcion de salir, mientras no elija esta opcion
#el programa deberà seguir ejecutandose
#Ejemplo:
#Selecciones Opcion:
#1- Suma
#2- Resta
#3- Multiplicación
#4- División
#5- Salir
import os

num1=0
num2=0
opcion=0
print("""Seleccione la opcion deseada:
        1.Suma
        2.Resta
        3.Multiplicar
        4.Dividir
        5.Salir
        """)
opcion=int (input("-->"))
while (opcion!=5):
    if (opcion==1):
        print("Ingrese dos numeros: ")
        num1=int(input())
        num2=int(input())
        print(f"La suma es: {num1+num2}")
    elif (opcion==2):
        print("Ingrese dos numeros: ")
        num1=int(input())
        num2=int(input())
        print (f"La resta es {num1-num2}")
    elif (opcion==3):
        print("Ingrese dos numeros: ")
        num1=int(input())
        num2=int(input())
        print(f"La multiplicacion es {num1*num2}")
    elif (opcion==4):
        print("Ingrese dos numeros: ")
        num1=int(input())
        num2=int(input())
        if (num2!=0):
            print(f"La division es {num1/num2}")
        else:
            print("Division entre 0s es imposible")
    print("""Seleccione la opcion deseada:
        1.Suma
        2.Resta
        3.Multiplicar
        4.Dividir
        5.Salir
        """)
    opcion=int (input("----->"))
#fin while
os.system("cls")
print("Gracias por usar el programa.")