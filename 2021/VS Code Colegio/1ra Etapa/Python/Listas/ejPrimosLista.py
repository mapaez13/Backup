#cargar una lista con 5 numeros
#Posteriormente, identificar, cuantos numeros
#primos se encuentran en la lista

CANT=5               #constante, siempre debe ir en mayusculas
numeros=[]
num=0
print("Cargar numeros a la lista")
for k in range (CANT):
    print(f"Ingrese Valor nro. {k+1}")
    num=int(input())
    numeros.append(num)
    print(numeros)