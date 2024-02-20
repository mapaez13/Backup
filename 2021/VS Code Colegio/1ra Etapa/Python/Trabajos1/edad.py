#Programa que imprima el mensaje de mayor o menor de edad
edad=0
print("Ingrese su edad")
edad= int (input ())
if (edad>=18 and edad<=120):
    print("Mayor de edad, acceso permitido")
elif (edad>=1 and edad<=17):
    print("Menor de edad, acceso denegado")   
else:
    print("Edad Incorrecta")   
print("Gracias...")