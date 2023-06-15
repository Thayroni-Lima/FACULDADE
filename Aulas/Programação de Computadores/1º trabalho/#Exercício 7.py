#Exercício 7
#Thayroni Lima e Ellysson Ysllan
#02/04/2023

#Entrada
a = float(input("Coloque o valor 'a':\n"))
b = float(input("Coloque o valor 'b':\n"))
c = float(input("Coloque o valor 'c':\n"))
d = float(input("Coloque o valor 'd':\n"))

#Processamento
med_arit = (a + b + c + d) / 4
med_harm = 4 / ((1 / a) + (1 / b) + (1 / c) + (1 / d))
med_geo = (a * b * c * d) ** (1/4)
med_quad = (a ** 2 + b ** 2 + c ** 2 + d ** 2) / 4

#Saída
print("A média aritmética é ", med_arit)
print("A média harmônica é ", med_harm)
print("A média geométrica é ", med_geo)
print("A média quadrática é ", med_quad)