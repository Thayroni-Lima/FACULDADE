#for
#estrutura de dados
    #tipos primitivos
#strings
#atribuiçaõ múltipla

import turtle

def fatoriar (fat):
    contadora = 1
    fat = int(input("Digite o número a ser fatoriado:\n"))
    resultado = 1

    while contadora <= fat:
        print(contadora)
        resultado *= contadora
        contadora += 1

    print("-------")
    print(f"O resultado é {resultado}")

fatoriar(5)