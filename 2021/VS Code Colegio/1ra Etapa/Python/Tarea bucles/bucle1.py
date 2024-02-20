n=0
m=0

print("Numeros pares e impares")
print("Ecriba un numero entero")
n=int (input())

print("Escriba un numero mayor o igual al anterior")
m=int (input())

if (m <= n):
    print(F"ESCRIBA UN NUMERO MAYOR O IGUAL QUE {n}")
    pass
    print("Escriba un numero mayor o igual al anterior")
    n=int (input())  
else:
    for k in range (n, m+1):
        if (k%2==0):
            print(f"El numero {k} es par")
        else:
            print(f"El numero {k} es impar")