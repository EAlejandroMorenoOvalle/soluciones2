def hola():
    nombre = "Alejandro"
    return("hola"+nombre)

def imprimir():
    print("Ejecuto la funcion hola: {}".format(hola()))

imprimir()


def saludame( nombre ):
    print("Hola "+nombre)

saludame("Alejandro")