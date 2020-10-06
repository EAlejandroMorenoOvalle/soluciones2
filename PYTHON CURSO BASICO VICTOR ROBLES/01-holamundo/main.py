print("Hola Mundo")

#variables 

texto = "Repaso de python"
autor = "de victor robles"
year = 2020

#CONCATENACION
print(f"{texto} - {autor}- {str(year)}")
print( texto +"-"+ autor+"-"+ str(year))


#input 

datoIntroducido = input("¿Cual es tu pagina web?")

print(f"El sitio web del usuario es: {datoIntroducido}")

"""
#if

altura = int(input("Cual es tu estatura?"))

if altura >= 180:
    print("Eres una persona alta")
else:
    print("Eres pequeño")
"""
def mostrarAltura(altura):
    #altura = int(input("Cual es tu estatura?"))

    if altura >= 180:
        print("Eres una persona alta")
    else:
        print("Eres pequeño")

mostrarAltura(180)

personas = ["Alejandro", "Manuel", "Roberto"]

for persona in personas:
    print(f"-{persona}")