#Ejercicio 1. Escriba un programaque calcula la paga de un trabajador según
# sean las horas trabajadas y el precio que se le pagan las horas con las
# siguientes condiciones:
# a) Si trabaja entre 30 y 40 horas se le paga la tarifa por hora normal.
# b) Si trabaja más de 40 horas cada hora extra se le pagará 20% más la 
# tarifa por hora normal.
# c) Si trabaja menos de 30 horas se le descuenta 12% de su paga.

pagoH=0
hsTrabajadas=0
porcentajeExtra=0.2
porcentajeDesc=0.12
montoTotal=0
hsExtra=0
montoHsExtra=0
montoDesc=0

#main
print ("=============================================================")
print ("=                    CALCULO DE SALARIO                     =")
print ("=============================================================")

print ("Ingrese la cantidad de horas trabajadas")
hsTrabajadas=int (input())
print ("Ingrese Monto por hora")
pagoH=int (input())
if (hsTrabajadas >=30 and hsTrabajadas<=40):
    montoTotal=hsTrabajadas*pagoH
elif (hsTrabajadas >40):
    montoTotal=hsTrabajadas*pagoH
    hsExtra+hsTrabajadas-40
    montoHsExtra=(hsExtra*pagoH)*porcentajeExtra
    montoTotal=montoTotal=montoHsExtra
else:
    montoTotal=hsTrabajadas*pagoH
    montoDesc=montoTotal*porcentajeDesc
    montoTotal=montoTotal-montoDesc
print ("============================================================")
print (f"=             Usted recibira de sueldo: {montoTotal}      =") 
print ("============================================================")