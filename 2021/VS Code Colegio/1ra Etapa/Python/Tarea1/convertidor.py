km=0
m=0
cm1=0
cm2=0
cm3=0

print("========================================================")
print("=                 Calculador de centimetros            =")
print("========================================================")

print("Escribe los metros y kilometros")
km=int (input())
m=int (input())
cm1=(km*1000000)
cm2=(m*100)
cm3=(cm1+cm2)

print(f"La distancia en km es {cm1}")
print(f"La distancia en m es {cm2}")
print(f"La distancia total es {cm3}")