v=0

n=0

n0=0



print("MAYORES QUE EL PRIMERO")

v=int(input("¿Cuántos valores va a introducir? "))

if(v<0):

    print("¡Imposible!")

else:

    n=int(input("Escriba un número: "))

    for k in range (1,v+1):

        n0=int(input(f"Escriba un número más grande que {n}: "))

        if(n0<n):

            print(f"{n0} no es mayor que {n}")