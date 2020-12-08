with open("prueba.txt", "r") as file:
	contenido = file.read()
	print(contenido)
	file.close()

file = open("prueba.txt", "r")
contenido2 = file.read()
print(contenido2)
file.close()


