#12 04 2023

#CONTROLE DE FLUXO
    #CONDIOCIONAIS
    #BLOCO
    #LOOPS

#entrada
nota1 = float(input("Digite a primeira nota:\n"))
nota2 = float(input("Digite a segunda nota:\n"))

#processamento
media = (nota1 + nota2) / 2

#saída
if media >= 7:
    print("Você foi aprovado!")
elif 4 < media < 7:
    print("Você fará final.")
    final_por = 10 - media
    print(f"A final precisará de {final_por}.")
else:
    print ("Você foi reprovado.")