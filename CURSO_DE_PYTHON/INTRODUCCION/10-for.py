print( "*********IMPRIMIR ELEMENTOS DE LISTAS***********" )
verduras = ["Cebolla", "Pepino", "Lechuga"]

for verdura in verduras:
    print( verdura )

print( "********CICLAR UN NUMERO DETERMINADO DE VECES************" )
numero_iteraciones = 5
for i in range( numero_iteraciones ):
    print(f"{i} Hola")

print( "********ITERAR LETRAS DE UNA CADENA************" )

frase = "Esta es una frase"

for letra in frase:
    print( letra )

print( "********ITERAR UN NUMERO DE VECES DETERMINADO POR EL TAMAÑO DE UN STRING************" )

frase = "Esta es una frase"

for letra in range( len( frase ) ):
    print( letra )