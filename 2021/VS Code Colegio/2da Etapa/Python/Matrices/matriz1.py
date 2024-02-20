import datetime
matriz=[]
fila=0
columna=0
currentDate=datetime.date.today()
fila=int(input("Cuantas filas vas a agregar: "))
columna=int(input("Cuantas columnas vas a agregar: "))

for f in range (fila):
    for c in range(columna):
        if (f==c):
            print(1,end="   ")
        else:
            print(0,end="   ")
    print("\n")

print(currentDate)