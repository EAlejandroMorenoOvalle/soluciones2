with open("prueba.txt", "a") as archivo:
	archivo.write("\n adios mundo")
	print(archivo)
	archivo.close()

fichero = open("prueba.txt", "a")
fichero.write("append")
fichero.close()