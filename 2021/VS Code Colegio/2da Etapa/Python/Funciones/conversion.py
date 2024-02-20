import bin
numero=0
k=0
listadecimal={18, 56, 22, 88, 202}
binarios=[]

for k in range (5):
    numero=listadecimal[k]
    valorRetornado=bin.binarioAdecimal (numero)
    binarios.append(valorRetornado)
print(listadecimal)
print(binarios)