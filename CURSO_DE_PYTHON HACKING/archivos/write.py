with open("prueba.txt", "w") as archivo:
	archivo.write("Adios Mundo")
	print(archivo)
	archivo.close()


archivo2 = open("prueba.txt","w")
archivo2.write("Que onda mundo")
archivo2.close()
