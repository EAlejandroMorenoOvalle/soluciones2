import random


def atack_enemy(num):
    if num == 1:
        dano = random.randrange(0,20,5)
        return dano
    if num == 2:
        dano = random.randrange(5,20,5)
        return dano
    else:
        dano = random.randrange(0,30,5)
        return dano

def atk(atk):
    if atk == 1:
        print("Elegiste el ataque fuerte")
        dano = random.randrange(20,70,10)
        return dano, False
    else:
        print("Elegiste el ataque normal")
        dano = random.randrange(10,40,10)
        return dano,True

