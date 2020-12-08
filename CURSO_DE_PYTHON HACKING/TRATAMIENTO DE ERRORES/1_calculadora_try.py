import sys
def suma(numero1, numero2):
    try:
        print(numero1+numero2)
    except NameError:
        print("Variable indefinida")
    except TypeError:
        numero1 = int(numero1)
        numero2 = int(numero2)
        print(f"Hay un error en el tipo de variables, pero tu resultado es: {numero1+numero2} ")

def resta(numero1, numero2):
    try:
        print(numero1-numero2)
    except NameError:
        print("Variable indefinida")
    except TypeError:
        numero1 = int(numero1)
        numero2 = int(numero2)
        print(f"Hay un error en el tipo de variables, pero tu resultado es: {numero1-numero2} ")


def switcher(modo):
    if modo == 3:
        sys.exit()
    else:
        var1 = int(input("Ingresa el primer numero"))
        var2 = input("Ingresa el segundo numero ")
        if modo == 1:
            suma(var1,var2)
        if modo == 2:
            resta(var1,var2)

def main():
    modo = int(input("Ingresa un modo [1] = suma , [2] = resta, [3] = exit "))
    switcher(modo)

if __name__ == '__main__':
    try:
        main()
    except KeyboardInterrupt:
        print("\nInterumpiste el programa, nos vemos")