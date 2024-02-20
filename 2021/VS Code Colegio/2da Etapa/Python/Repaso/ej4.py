from fmatriz2 import*
import os

matriz=[]
calificaciones=0
fila=0
columna=0
cal=0
cmat=0
alumnos=[]
materias=[]
valor=0



cal=int(input ("Ingrese cuantos alumnos estaran en la lista: ")) 
cmat=int(input ("Ingrese cuantas materias estaran en la lista: ")) 

matriz=creaMatriz(matriz,cal,cmat)

print("""
Carga de alumnos
""")

for f in range (cal):
    alumnos.append(input())


print ("""
Carga de Materias
--------------
""")    

for f in range (cmat):
    materias.append(input())
os.system ("cls")

print ("""
Carga de Matriz
--------------
""")    

for f in range (cal):
    for c in range (cmat):
        print (f"Cuantos Puntos saco en la materia {materias[c]} el alumno {alumnos[f]}?: ")
        valor=int(input())
        matriz[f][c]=valor

os.system ("cls")
alumnos.insert(0,"Apellidos")
for f in range (cal+1):
    print (alumnos[f],end="     ")
print()

for f in range (cal):
    print (materias[f], end="     ")
    for c in range (cmat):
        print (matriz[f][c], end="     ") 
    print("\n")

suma=0
promedio=0
for f in range (cal):
   for c in range (cmat):
       suma=+matriz[f][c]
promedio=suma/cmat
suma=0
print(f"El promedio del alumno {alumnos[f]} es {promedio}.")