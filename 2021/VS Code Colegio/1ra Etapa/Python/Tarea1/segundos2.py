num1=0
num2=0
seg=0
mins=0
hrs=0


print("========================================================")
print("=                  Calculador de segundos              =")
print("========================================================")

print("Ingrese los segundos")
seg=int (input())
hrs=seg//3600
num1=seg%3600
mins=num2//60
num2=num1%60

print(f"El tiempo es de {hrs} horas, {mins} minutos y {num2} segundos")