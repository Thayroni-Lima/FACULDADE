#Exercício 12/04/2023
#Faça um programa para ler uma tempratura e exibir na tela o seguinte:
#Se a temepratura for maior que 35 "Está muito quente"
#Se estiver entre 25 e 35 "Está quente"
#Se estiver entre 10 e 25 "Está frio"
#Entre 0 e 10 "Está muito frio"
#Menor que 0 "Está congelando"

#Entrada
temperatura = float(input("Qual a temperatura atual?\n"))

#Processamento
if temperatura >= 35:
    temperatura = "Está muito quente!"
elif 35 > temperatura >= 25:
    temperatura = "Está quente!"
elif 25 > temperatura >= 10:
    temperatura = "Está frio!"
elif 10 > temperatura >= 0:
    temperatura = "Está muito frio!"
elif 0 > temperatura:
    temperatura = "Está congelando."

#Saída
print(temperatura)