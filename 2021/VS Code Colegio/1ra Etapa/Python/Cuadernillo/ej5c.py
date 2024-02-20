num1=0
num2=0
suma=0

num1=int(input("Ingrese un numero: "))
num2=int(input("Ingrese las veces que quieras multiplicar el numero: "))

if (num2!=0):
    for k in range (num2-1):
        suma=num1
        print(f"{suma} + {num1} = {suma+num1}")
        suma=suma+num1

print(f"{num1} x {num2} = {suma}")