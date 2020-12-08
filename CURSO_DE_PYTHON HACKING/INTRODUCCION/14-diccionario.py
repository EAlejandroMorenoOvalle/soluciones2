diccionario={"saludo": "Hola", "color":"Rojo"}
diccionario_update={"despedida": "adios", "color":"verde"}
#print(diccionario["saludo"])
#diccionario["saludo"] = "adios"
#print(diccionario["saludo"])
#print("saludo" in diccionario)


print(diccionario.keys())
print(diccionario.values())

diccionario_new = diccionario.copy()
print(diccionario_new)

diccionario_new.update(diccionario_update)

print(diccionario_new)