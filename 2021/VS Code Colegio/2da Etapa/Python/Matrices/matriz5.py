from fmatriz import *
import os

ventas=[]   #matriz
marcas=[]
meses=[]
valor=0
cmeses=0
cautos=0
totalAutos=0




print ("Ingrese Cantidad de Meses")
cmeses=int(input())
print ("Ingrese Cantidad de Vehiculos:")
cautos=int(input())
ventas=creaMatriz(ventas,cautos,cmeses)

print("""
Carga de Meses
--------------
"""
)

for f in range (cmeses):
    meses.append(input())

print ("""
Carga de Autos
--------------
""")    

for f in range (cautos):
    marcas.append(input())
os.system ("cls")

imprimeCabecera()

for f in range (cmeses):
    for c in range (cautos):
        print (f"Cuantos Vehiculos de la marca {marcas[c]} se vendio en {meses[f]}?: ")
        valor=int(input())
        ventas[f][c]=valor

os.system ("cls")
imprimeCabecera()
marcas.insert(0,"meses")
for f in range (cautos+1):
    print (marcas[f],end="  ")
print ("\n")
for f in range (cmeses):
    print (meses[f], end="  ")
    for c in range (cautos):
        print (ventas[f][c], end="  ") 
    print("\n")    

#agregar total por meses
acum=0
for f in range (cmeses):
    for c in range (cautos):
        acum=acum+ventas[f][c]
    print(acum)
    acum=0
#agregar total por vehiculos
acum=0
print("\nTOTAL POR VEHICULO")

for f in range(cmeses):
    for c in range(cautos):
        acum=acum+ventas[f][c]
    print(f"{marcas[f+1]}: {acum}")
#buscar el vehiculo con mayor venta
mayor=0
menor=0
for f in range (cmeses):
    for c in range (cautos):
        if (mayor<ventas[f][c]):
            mayor=ventas[f][c]
            indiceAuto=c
        print(f"La marca con mayor cantidad de ventas es {marcas[indiceAuto]}, con {mayor} vehiculos vendidos")
        if (mayor>ventas[f][c]):
            mayor=ventas[f][c]
            indiceAuto=c
        print(f"La marca con menor cantidad de ventas es {marcas[indiceAuto]}, con {menor} vehiculos vendidos")