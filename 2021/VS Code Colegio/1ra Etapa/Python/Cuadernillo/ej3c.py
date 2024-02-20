#imprimir el promedio de 10 numeros
suma=0        #para sumar los numeros ingresados por el usuario
cantidad=15
n=0           #numeros que ingresa el usuario

for k in range (cantidad):
    print(f"Ingrese los numeros {k+1}: ")
    n=int(input())
    #acumulador
    suma=suma+n

promedio=suma/cantidad
print(f"EL promedio es {promedio}")