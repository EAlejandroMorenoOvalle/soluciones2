
import sys
import atack
import status

def inicio():
    print("Bienvenidos al juego\n Antes de iniciar es necesario elegir la dificultad\n [1]Facil [2]Medio [3]Dificil [#]Salir")
    numero  = int(input("=>"))
    return numero

def dificultad(num):
    if num == 1:
        print("Elegiste la dificultad facil\nTu batalla sera contra un paladin")
        return 100
    if num == 2:
        print("Elegiste la dificultad media\nTu batalla sera contra un Ogro")
        return 200
    if num == 3:
        print("Elegiste la dificultad dificil\nTu batalla sera contra un dragon")
        return 300
    else:
        sys.exit()

def main():
    numero = inicio()
    hp_enemy = dificultad(numero)
    print("******")
    hp = 100
    turno = True
    print("Tu batalla inicia")
    while hp_enemy > 0 and hp > 0:
        ataqueenemigo = atack.atack_enemy(numero)
        print(f"El ataque de tu enemigo fue de { ataqueenemigo }")
        hp = hp - ataqueenemigo
        if hp > 0:
            if turno == True:
                status.status(hp, hp_enemy)
                print("Te toca atacar\n Elige un ataque\n El ataque fuerte baja entre 20 y 65\n el ataque normalbaja entre 10 y 30 de vida\ para el ataque fuerte [1] y para el ataquee normal [1]")
                mi_ataque = int(input("=>"))
                elataque = atack.atk(mi_ataque)
                mi_dano = elataque[0]
                turno = elataque[1]
                print(f"Tu ataque fue de {mi_dano}")
                hp_enemy = hp_enemy - mi_dano
                if hp_enemy <= 0:
                    print("Derribaste al enemigo, ganaste!!")
                else:
                    status.status(hp, hp_enemy)
                    pass
            else:
                turno = True
                
        else:
            print("Has muerto!!!, Perdiste")
            sys.exit()



if __name__ == '__main__':
    try:
        main()
    except KeyboardInterrupt:
        sys.exit()