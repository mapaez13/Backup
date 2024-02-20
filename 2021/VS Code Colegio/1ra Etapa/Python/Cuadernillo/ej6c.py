dividendo=0
divisor=0
cociente=0

dividendo=int(input("Ingrese dividendo: "))
divisor=int(input("Ingrese divisor:"))

while (dividendo!=0):
    dividendo=dividendo-divisor
    cociente=cociente+1
    if (dividendo<divisor):
        break

print("La division es: ",cociente)