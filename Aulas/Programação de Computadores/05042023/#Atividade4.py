#Atividade5
#05 04 2023

#Entrada
valor_sapato = float(input("O valor do sapato sem o desconto é "))
desconto = float(input("O valor, em porcento(s), do desconto é de "))

#Processamento
sapato_descontado = valor_sapato * (1 - (desconto/100))

#Saída
print(f"O valor do sapato é {sapato_descontado}")