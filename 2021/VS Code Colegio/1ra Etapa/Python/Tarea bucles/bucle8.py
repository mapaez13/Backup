mayor=0
menor=999
promedio=0.0
suma=0
n=0
num=0

print("Cuantos numeros vas a introducir?")
n=int(input())
if(n<0):
    print("No es posible realizar la operacion")
else:
    for k in range (n):
        print("Ingrese numero: ")
        num=int (input())
        suma=suma+num
        if (mayor < num):
            menor=num
    promedio=suma/n
    print ("Los datos obtenidos...")
    print (f"El promedio es: {promedio}")
    print (f"El mayor es: {mayor}")
    print (f"El Menor esa: {menor}")
print ("......Fin del Programa......")