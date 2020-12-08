import sys
modo = int(input("Ingresa el modo de ejecucion \\n [1] suma, [2] resta.\\n"))

numero1 = int(input("Numero 1:"))
numero2 = int(input("Numero 2:"))

def suma(numero1, numero2):
    return(numero1+numero2)
def resta(numero1, numero2):
    return(numero1-numero2)

    




def main():
    if modo == 1 or modo == 2:
        if modo == 1:
            print(suma(numero1, numero2))
        else:
            print(resta(numero1, numero2))
    else:
        sys.exit()
if __name__ == '__main__':
    main()