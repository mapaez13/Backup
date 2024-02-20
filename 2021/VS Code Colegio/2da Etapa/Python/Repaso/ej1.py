matriz=[]
num=0
suma=0

for k in range (5):
    num=int(input(f"Ingrese {k+1} numero: "))
    matriz.append(num)
    suma+=num
if((suma%2)==0):
    print("La suma es par")

else:
    print("La suma es impar")