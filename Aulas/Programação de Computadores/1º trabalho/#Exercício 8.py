#Exercício 8
#Thayroni Lima e Ellysson Ysllan
#02/04/2023

#Entrada
    #Coordenada A
xa = float(input("Digite o valor 'x' da coordenada A\n"))
ya = float(input("Digite o valor 'y' da coordenada A\n"))
    #Coordenada B
xb = float(input("Perfeito! Digite o valor 'x' da coordenada B\n"))
yb = float(input("Agora, digite o valor 'y' da coordenada B\n"))

#Processamento
distancia = ((xb-xa)**2+(yb-ya))**(1/2)

#Saída
print("A distância entre os pontos é ", distancia)