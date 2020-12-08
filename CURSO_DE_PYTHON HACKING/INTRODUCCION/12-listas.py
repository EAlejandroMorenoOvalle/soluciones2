lista = [8,8,10, "Alejandro","Carlos"]

#print(type(lista))
#print(lista)
#print(len(lista))

#for elemento in lista:
#    print(elemento)

#AGREGAR UN ELEMENTO
lista.append("Carlos")

#print(lista)

#contar cuants veces se repite un elemento en una lista
print( lista.count("Carlos") )
#resultado 2

#añadir elementos de una segunda lista en otra lista
lista2 = ["Mi segundo dato agregado desde otra lista"]

lista.extend(lista2)

print(lista)

#INSERTAR ELEMENTOS AL INICIO DE UNA LISTA
lista.insert(0, lista2)

print(lista)