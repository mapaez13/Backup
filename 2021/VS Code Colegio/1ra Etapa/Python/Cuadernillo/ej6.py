Ax=0
Ay=0
Bx=0
By=0
Distancia=0

Ax=int(input("Ingrese la coordenada del punto A,x1: "))
Ay=int(input("Ingrese la coordenada del punto A,y1: "))
Bx=int(input("Ingrese la coordenada del punto B,x2: "))
By=int(input("Ingrese la coordenada del punto B,y2: "))

Distancia= (((Bx-Ax)**2)-((By-Ay)**2))**(1/2)

print(f"La distancia es: {Distancia}")