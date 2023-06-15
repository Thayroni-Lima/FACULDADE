#Exercício 4
#Thayroni Lima e Ellysson Ysllan
#02/04/2023


#Entrada
numero1 = float(input("Digite o dividendo:(1)\n"))
numero2 = float (input ("Digite o divisor (2)\n"))

#Processamento
quociente12 = numero1 / numero2
resto12 = numero1 % numero2
quociente21 = numero2 / numero1
resto21 = numero2 % numero1

#saida
print("Dividendo (1) é", numero1)
print("Divisor (2) é", numero2)
print("Quociente de 1 por 2 é ", quociente12)
print("Resto de 1 por 2", resto12)
print("Quociente de 2 por 1 é", quociente21)
print("Resto de 2 por 1", resto21)