multiplo=0
k=0
n=0

print("Ingrese un numero para desarrollar su tabla de multiplicar: ")
n=int (input ())

for k in range (n,n*10+1,n):
    multiplo=multiplo+1
    print(f"{n} x {multiplo} = {k}")