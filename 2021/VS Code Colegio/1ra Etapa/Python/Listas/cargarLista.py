#cargar una lista con 10 numeros por teclado
#imprimir una lista contar cuantos numeros
#negativos hay en la lista e imprimir
CANTIDAD=10              #constante es una variable cuyo no se debe modificar

numeros=[]
num=0
contNegativo=0

for k in range (1,CANTIDAD+1):
    print(f"Ingrese Valor Nro. {k}")
    num=int(input())
    numeros.append(num)
print(numeros)

for k in range (CANTIDAD):
    if (numeros[k]<0):
        contNegativo+=1

print(f"La cantidad de Numeros negativos es {contNegativo}")