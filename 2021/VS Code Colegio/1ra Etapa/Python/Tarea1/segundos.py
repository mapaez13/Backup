num1=0
seg=0
mins=0


print("========================================================")
print("=                  Calculador de segundos              =")
print("========================================================")

print("Escribe el numero para convertir")
num1=int (input())
seg=num1%60
mins=int(num1/60)

print(f"El resultado es {mins} minutos y {seg} segundos")