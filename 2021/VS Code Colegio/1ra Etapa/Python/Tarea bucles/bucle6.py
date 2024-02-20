n=0
num=0
pares=0
impares=0

print("Contador de numeros pares e impares")
n=int(input("Cuantos valores vas a introducir?: "))
if (n<0):
    print ("No se peude realizar la operacion :(")
else:
    for k in range (1,n+1):
        num=int(input(f"Ingrese el numero {k}: "))
    if (num%2==0):
        pares=pares+1
    else:
        impares=impares+1
print (f"Ha escrito {pares} numeros pares y {impares} numeros impares")
print ("Gracias por utilizar el programa")
