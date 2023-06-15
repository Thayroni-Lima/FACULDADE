#Atividade6
#05 04 2023
#Atividade5
#05 04 2023

#Entrada
reais_por_hr = float(input("O valor, em reais, ganho por hora trabalhada é "))
hr_aula = float(input("O valor de horas que cada aula tem é "))
aulas_mes = float(input("A quantidade de dias trabalhados no mês é "))
desconto_inss = float(input("Contudo, como nem tudo são flores, o percentual de desconto do INSS é de "))

#Processamento
bruto = (reais_por_hr * hr_aula * aulas_mes)
salario_liquido = bruto * (1 - (desconto_inss/100))

#Saída
print(f"O valor do salário bruto ({bruto}) com o desconto de ({desconto_inss})% é de R$ {salario_liquido}.")