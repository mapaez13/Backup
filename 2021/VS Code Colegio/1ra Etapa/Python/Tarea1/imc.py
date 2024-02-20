peso=0
altura=0
bmi=0
imc1=0

print("========================================================")
print("=                    Calculador de BMI                 =")
print("========================================================")

print("Pon tu peso")
peso=float (input())
print("Pon tu altura")
altura=float (input())

bmi=peso / altura**2


print(f"Tu BMI es de {bmi}")