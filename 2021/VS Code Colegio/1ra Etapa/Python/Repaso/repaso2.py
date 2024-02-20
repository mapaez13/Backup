#Problema 2. Imprimir la cantidad de letras 
#n y m tiene una cadena ingresada por teclado. 

cad=""
contaM=0
contaN=0
n=0

print("Contador de Vocales")
print("Ingrese la palabra: ")
cad=input()

n=len(cad)
for k in range (n):
    if (cad[k]=="m"):
        contaM=contaM+1
    elif (cad[k]=="n"):
        contaN=contaN+1
print(f"Hay {contaM} m en tu palabra")
print(f"Hay {contaN} n en tu palabra")