#Un venderdor recibe un sueldo base
#mas un 10% extra por comision de
#sus ventas. El vendedor desea saber
#cuanto dinero obtendra por concepto
#de comisiones por las tres ventas que
#realizo en el mes y el total que 
#recibira en el mes tomando en cuenta
#su sueldo y base de comisiones

#area de variables

venta=0
comision=0.10
ventaComision=0
sueldo=2192839
total=0

#main
print ("Ingrese el total de los precios de venta")
venta= int (input())
ventaComision=venta+comision
total=sueldo+ventaComision
print(f"Su pertenencia es de {total}")