#Selecciones Opcion:
#1- Suma
#2- Resta
#3- Multiplicación
#4- División
#5- Salir
def suma (a,b):
    r=0
    r=a+b
    print(f"La suma es {r}")
    return


print ("""
       SELECCIONE LA OPCION DESEADA
       ============================
       1. Suma
       2. Restar
       3. Multiplicar
       4. Dividir
       5. Salir
       """)

opcion=int (input("-->"))
while (opcion!=5):

    if (opcion==1):
        a=0
        b=0
        print("Ingrese los numeros")
        a=int(input())
        b=int(input())
        suma(a,b)

    elif (opcion==2):


    elif (opcion==3):


    elif (opcion==4):


     #esta parte esta fuera de los elif o if

    print ("""
       SELECCIONE LA OPCION DESEADA
       ============================
       1. Suma
       2. Restar
       3. Multiplicar
       4. Dividir
       5. Salir
       """)
    opcion=int (input("-->"))
print ("....Gracias por usar la calculadora....")
#FIN