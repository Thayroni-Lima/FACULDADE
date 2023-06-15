#Atividade1
#05 04 2023

#Entrada em metros
altura = float(input("\t \tOlá!\n Qual a altura da caixa?\n"))
largura = float(input("Qual a largura da caixa?\n"))
profundidade = float(input("Qual a profundidade da caixa?\n"))

#Processamento
capacidade_m3 = altura * largura * profundidade
capacidade_litros = capacidade_m3 * 1000

#Saída
print(f"Considerando altura de {altura} m, largura de {largura} m e profundidade de {profundidade} m, a capacidade da sua caixa d'água ({capacidade_m3}) m³ em litros é {int(capacidade_litros)} L.")
