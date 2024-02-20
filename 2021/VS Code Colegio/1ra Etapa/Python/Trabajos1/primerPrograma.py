#Solicitar al usuario que ingrese 5 numeros A B C D E, e imprimir el mayor y el menor de los 5
A=0
B=0
C=0
D=0
E=0
print("Ingrese los numeros")
A=int (input())
B=int (input())
C=int (input())
D=int (input())
E=int (input())
#Si el numero es mayor
if (A>B and A>C and A>D and A>E):
    print(f"{A} es el mayor numero")
if (B>A and B>C and B>D and B>E):
    print(f"{B} es el mayor numero")
if (C>A and C>B and C>D and C>E):
    print(f"{C} es el mayor numero")
elif (D>A and D>B and D>C and D>E):
    print(f"{D} es el mayor numero")
else:
    print(f"{E} es el mayor numero")
#Si el numero es menor
if (A<B and A<C and A<D and A<E):
    print(f"{A} es el menor numero")
if (B<A and B<C and B<D and B<E):
    print(f"{B} es el menor numero")
if (C<A and C<B and C<D and C<E):
    print(f"{C} es el menor numero")
elif (D<A and D<B and D<C and D<E):
    print(f"{D} es el menor numero")
else:
    print(f"{E} es el menor numero")
#Si son iguales
if (A==B and A==C and A==D and A==E):
    print("Todos son iguales")

print()
print("Gracias por utilizar el programa")