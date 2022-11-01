lista = ["1", "2", "3.54", "4.7"]

for i in range(0, len(lista)):
    if float(lista[i]) % 1 == 0:
        lista[i] = int(lista[i])
    else:
        lista[i] = float(lista[i])

print(lista)