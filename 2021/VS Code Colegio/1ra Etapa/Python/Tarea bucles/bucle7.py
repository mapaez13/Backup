num1=0
num2=0

suma=0
print ("Ingrese el primer numero: ")
num1=int (input())
print(f"Ingrese un numero mayor que {num1}: ")
num2=int (input())
if (num2 < num1):
    print("No es posible realizar la operacion")
else:
    for k in range (num1,num2+1):
        suma=suma+k
print(f"La suma entre {num1} y {num2} es {suma}")