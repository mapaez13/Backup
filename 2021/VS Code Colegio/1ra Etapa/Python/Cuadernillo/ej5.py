ganados=0
empatados=0
puntos=0
total=0

ganados=int(input("Ingrese los partidos ganados: "))
empatados=int(input("Ingrese los partidos empatados: "))
perdidos=int(input("Ingrese los partidos perdidos: "))

ganados=ganados*3
empatados=empatados*1
perdidos=0
total=ganados+empatados+perdidos

print(f"Los puntos totales del equipo es: {total}")