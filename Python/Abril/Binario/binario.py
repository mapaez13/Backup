bin=""
dec=0
exp=0

bin=input("Ingrese binario: ")
for i in range(len(bin)-1,-1,-1):
    if (bin[i]=="1"):
        dec=dec+(1*(2**exp))
    exp=exp+1
print(dec)