mayusculas="ABCDEFGHIJKLMNÑOPQRSTUVWXYZ ÁÉÍÓÚ "
minusculas="abcdefghijklmnñopqrstuvwxyz áéíóú "
cad=""
auxCad=""
encontro=False

print("Ingrese la cadena de texto en minusculas")
cad=input()
#empieza la logica complicada
for k in range (len(cad)):
    encontro=False
    for i in range (len (minusculas)):
        if (cad[k]==minusculas[i]):
            auxCad=auxCad+mayusculas[i]
            encontro=True
    if (encontro==False):
        auxCad=auxCad+cad[k]
print("Minusculas= ", cad)
print("Mayusculas= ", auxCad)