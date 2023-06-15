#EXERCÍCIO3

ano = int(input("Digite a quantidade de anos\n"))
x = int(input("Digite o valor do capital\n"))
j = int(input("Digite o percentual de juros\n"))

while ano > 0:
    x = x * (1 + j / 100)
    ano = ano - 1

print(x)