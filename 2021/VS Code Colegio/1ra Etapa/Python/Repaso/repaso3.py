#Cargar una lista con 5 números ingresados por teclado. Imprimir el mayor y menor.
num1=0
num2=0
num3=0
num4=0
num5=0
menor=0
mayor=0
lista= list((num1,num2,num3,num4,num5))

print ("Ingrese 5 Numeros: ")
num1=int(input())
num2=int(input())
num3=int(input())
num4=int(input())
num5=int(input())

lista.sort()
print('sorted list:', lista)
menor=(lista[4])
mayor=(lista[0])

print(f"El numero mayor es {mayor} y el menor es {menor}")