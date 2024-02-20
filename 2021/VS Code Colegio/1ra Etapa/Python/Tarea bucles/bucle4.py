n=0
mayor=0
menor=9999

for k in range (10):
    print (f"Ingrese el {k} numero: " )
    n=int(input())
    if (n>mayor):
        mayor=n
    if (n<menor):
        menor=n
    
print(f"El menor de todos los numeros es {menor}")
print(f"El mayor de todos los numeros es {mayor}")