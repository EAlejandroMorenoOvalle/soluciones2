numero = 0

while numero < 11:
	print("Hello {}".format(numero) )
	numero += 1


password = input( "Ingresa una contraseña: " )
contador = 1

while password != 'root' and contador < 3:
	password = input( f"Password incorrecto intento :{contador}, Te quedan {3 - contador} intentos, Ingresa una contraseña: " )
	contador += 1

if( contador == 3 ):
	print( "Ya no tienes permitido intentar logguearte" )
else:
	print( "Te haz loggueado excitosamente" )

	
