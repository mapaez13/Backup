correctas=0
incorrectas=0
enblanco=0
total=0

correctas=int(input("Ingrese la cantidad de respuestas correctas: "))
incorrectas=int(input("Ingrese cantidad de respuestas incorrectas: "))
enblanco=int(input("Ingrese cantidad de respuestas sin responder: "))

total=(correctas*5)
total=total-(incorrectas*3)

print(f"El puntaje del alumno es {total} y el promedio por tema es {total/3}")