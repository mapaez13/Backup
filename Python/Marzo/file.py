name=""
mat1=""
mat2=""
mat3=""
name=input ("Ingrese su nombre:")
print("Ingrese las calificaciones: ")
mat1= int (input())
mat2= int (input())
mat3= int (input())
#print (f"{name}, sus calificaciones: {mat1}, {mat2}, {mat3})
file=open("Notas.txt", "w")
file.write("Name: \t")
file.write("mat1 \t")
file.write("mat2 \t")
file.write("mat3 \t")
file.write("\n")
file.write(name)
file.write("\t")
file.write(str(mat1))
file.write("\t ")
file.write(str(mat2))
file.write("\t ")
file.write(str(mat3))
file.close()