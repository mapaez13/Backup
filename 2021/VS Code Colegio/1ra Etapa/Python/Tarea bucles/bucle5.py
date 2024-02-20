n=0
num=0
cNegativos=0

print ("Cuantos numeros vas a introducir: ")
n=int (input())
if(n<0):
    print("No puede ser negativo")
elif (n==0):
    print("No escribio ningun numero")
else:
    for k in range (n):
        print(f"Ingrese el numero {k}")
        num=int(input())
        if (num<0):
            cNegativos=cNegativos+1
print (f"Hay {cNegativos} numeros negativos")