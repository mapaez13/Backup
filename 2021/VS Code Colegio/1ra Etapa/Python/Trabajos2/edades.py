#Ejercicio 2. Escribir un programa que imprima si la persona es niño,
# adolescente, adulto o anciano, según el rango de edades siguiente:
# a) 0 a 12 es niño.
# b) 13 a 17 es adolescente.
# c) 18 a 80 es adulto.
# d ) Mayor que 80 es anciano.

edad=0
print("********************************")
print("*        RANGO DE EDAD         *")
print("********************************")
print("Por favor ingrese su edad: ")
edad=int(input())
#evaluamos si es un niño
if (edad>=0 and edad<=12):
    print("Eres un niño")
if (edad>=13 and edad<=17):
    print("Eres un adolescente")
elif (edad>=18 and edad<=80):
    print("Eres un adulto")
else:
    print("Eres un anciano")

