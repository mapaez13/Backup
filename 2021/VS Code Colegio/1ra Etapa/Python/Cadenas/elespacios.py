#ingresar una cadena de texto, e imprimir dichas cadenas
#sin espacios. Ej: si ingresa "Esta es una cadena de texto"
#el programa debera imprimir "estaesunacadenadetexto"

cad="Este es una cadena"
auxCad=""
k=0

for k in range (len(cad)):
    if (cad[k]!=" "):
        auxCad=auxCad + cad[k]
print (f"La cadena original es: {cad}")
print (f"La cadena sin espacios es: {auxCad}")