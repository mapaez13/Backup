#programa que permita calcular el valor absoluto de
#un numero ingresado por el usuario
#usar una funcion para imprimir una cabecera o titulo de el programa

def cabecera ():
    print("?????????????????????????")
    print("CALCULO DE VALOR ABSOLUTO")
    print("?????????????????????????")
    return

def absoluto (num):
    r=num
    if(num<0):
        r=r*-1
    return (r)

#main
x=0
resultado=0
x=int(input("Ingrese numero: "))
resultado=absoluto(x)
print("El valor absoluto del numero es: ",resultado)