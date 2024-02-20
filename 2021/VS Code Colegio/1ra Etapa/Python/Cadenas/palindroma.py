cad=""
auxcad=""
k=0
n=0
cad=input ("Estimado usuario, ingrese una palabra: ")
for k in range (len(cad)-1,-1,-1):
    auxCad=auxCad+cad[k]
if (cad==auxCad):
    print("La palabra es PALINDROMA estimado señor/a")
    print("La palabra no es PALINDROMA estimado señor/a")