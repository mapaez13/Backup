nombre=" "
edad=0
edad1=0
estatura=0
estatura1=0
camigos=0
nacionalidad=" "
hobby=" "
msj=" "

print(""" 
888b      88 888888888888 888888888888  
8888b     88      88           88       
88 `8b    88      88           88       
88  `8b   88      88           88       
88   `8b  88      88           88       
88    `8b 88      88           88       
88     `8888      88           88       
88      `888      88           88""")                                              

print("Para empezar a construir tu perfil, empecemos con algunas preguntas.")
print("Cual es tu nombre completo?")
nombre= str (input())
print(f"Bienvenido, {nombre}! Gracias por usar nuestra red, procedamos a las siguientes preguntas.")

print("Ingrese su edad")
edad= int (input ())
if (edad>=18 and edad<=120):
    print("Mayor de edad, acceso permitido")
    edad1=2021-edad
elif (edad>=1 and edad<=17):
    pass
    print("Menor de edad, acceso denegado")
    print("Gracias...")   
else:
    pass
    print("Edad Incorrecta")
    print("Gracias...")   
#profe aca no me funciono el pass, tengo entendido que tengo que poner un 
#for _____ in variable:, intente y no me funciono :( si la proxima me
#podes mostrar sera un elementazo :)
    

print("Cuanto mides? Por favor ingresa en centimetros")
estatura=int(input())
estatura1=estatura/100
print("Genial, pasemos a otras mas")

print("Cuantos amigos tienes?")
camigos= int (input())
if (camigos>=1 and camigos<=30):
    print("Siempre es mejor tener a los mas cercanos siempre")
elif (camigos>=31 and camigos<=100):
    print("Guau! Tienes muchos amigos!")   
else:
    print("Seguro que tienes tantos?")   

print("Cual es tu nacionalidad?")
nacionalidad=str (input())

print("Cual es tu hobby?")
hobby=str (input())

print("Antes de terminar, corrobora que todo esté bien")
print("=================================================")
print("=                                                ")
print("=                                                ")
print(f"=    Nombre:{nombre}                            ")
print(f"=                            Edad:{edad}        ")
print(f"=    Año de nacimiento:{edad1}                  ")
print(f"=    Estatura:{estatura1}                       ")
print(f"=                Cantidad de amigos:{camigos}   ")
print(f"=    Nacionalidad:{nacionalidad}                ")
print(f"=                    HOBBY                      ")
print(f"={hobby}                                        ")
print("=                                                ")
print("=                                                ")
print("=================================================")

print("Genial, has terminado tu cuenta, quieres escribir algun mensaje? Te daremos algunos ejemplos")
print("Que piensas hoy?... Hoy pienso que es un lindo dia!")
print("Ahora, tu turno")
msj= str (input ())
print(f"{nombre} dice: {msj} ")