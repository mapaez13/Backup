from funciones import*


print ("""
        Encuentre a Carmen San Diego en Paraguay
    ===============================================
PISTA:El último dato que se tiene de Carmen San Diego
      es que ha estado por el departamento de Guaira.
      Según el siguiente mapa, muestra el punto donde
      se lo ha visto la última vez.

------------------------------------------------------
                      1 2 3 4 5
        ╔══════════╤══════════╗
        ║          │          ║
        ║          │          ║
        ║          │          ║
        ║          │          ║
        ║          │          ║
        ║──────────☻──────────║
     -1 ║        Guaira       ║
     -2 ║          │          ║
     -3 ║          │          ║
     -4 ║          │          ║
     -5 ║          │          ║
        ╚══════════╧══════════╝
        """)
print ("""
        Ayuda a Buscar a Carmen San Diego, Ingresando
        las coordenadas de avistamiento, coord1 Y coord2"
        """)
plano=""
oriente=""
km=0
km2=0
lugar1="Cordillera"
lugar2="Caaguazu"
lugar3="Caazapa"
lugar4="Paraguari"

plano=input("La persona fue hacia el norte, sur, este u oeste? \n")
km=int(input("Cuantos km crees que se ha desplazado? \n"))

if(km<100):
    print("Carmen San Diego sigue en Guaira!!!")
    guaira()
else:
            #norte
    if (plano=="norte"):
        oriente=input("La persona fue hacia el este u oeste? \n")
        km2=int(input(f"Cuantos km crees que avanzo hacia el {oriente}? \n"))
        if (km2>75): 
            if (oriente=="oeste"):
                print(f"Ya sabemos que fue hacia el {plano}, {oriente} y avanzo mas de {km2}km. Consideramos que estara por {lugar1}")  
                cordillera()
            if(oriente=="este"):
                print(f"Ya sabemos que fue hacia el {plano}, {oriente} y avanzo mas de {km2}km. Consideramos que estara por {lugar2}")
                caaguazu()
        else:
            print(f"Carmen San Diego esta en {lugar2}!!!!!!!")
            #sur
    if (plano=="sur"):
        oriente=input("La persona fue hacia el este u oeste? \n")
        km2=int(input(f"Cuantos km crees que avanzo hacia el {oriente}? \n"))
        if (km2>75): 
            if (oriente=="oeste"):
                print(f"Ya sabemos que fue hacia el {plano}, {oriente} y avanzo mas de {km2}km. Consideramos que estara por {lugar4}")  
                paraguari()
            if(oriente=="este"):
                print(f"Ya sabemos que fue hacia el {plano}, {oriente} y avanzo mas de {km2}km. Consideramos que estara por {lugar3}")
                caazapa()

            #este
    
    if (plano=="este"):
        oriente=input("La persona fue hacia el norte u sur? \n")
        km2=int(input(f"Cuantos km crees que avanzo hacia el {oriente}? \n"))
        if (km2>75): 
            if (oriente=="norte"):
                print(f"Ya sabemos que fue hacia el {plano}, {oriente} y avanzo mas de {km2}km. Consideramos que estara por {lugar2}")  
                caaguazu()
            if(oriente=="sur"):
                print(f"Ya sabemos que fue hacia el {plano}, {oriente} y avanzo mas de {km2}km. Consideramos que estara por {lugar3}")
                caazapa()


            #oeste
    if (plano=="oeste"):
        oriente=input("La persona fue hacia el norte u sur? \n")
        km2=int(input(f"Cuantos km crees que avanzo hacia el {oriente}? \n"))
        if (km2>75): 
            if (oriente=="norte"):
                print(f"Ya sabemos que fue hacia el {plano}, {oriente} y avanzo mas de {km2}km. Consideramos que estara por {lugar1}")  
                cordillera()
            if(oriente=="sur"):
                print(f"Ya sabemos que fue hacia el {plano}, {oriente} y avanzo mas de {km2}km. Consideramos que estara por {lugar4}")
                paraguari()

