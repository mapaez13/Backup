lista = []
n=int(input("Ingrese la cantidad de numeros en la lista:"))
for i in range(0,n):
    num= int(input())
    lista.append(num)
print(lista)

m=int(input("Ingrese el numero a encontrar:"))

index = lista.index(m)
print (f"{m} se encuentra en la posicion {index} de la lista")