#range
def fatoriar(x):
    resultado = 1
    for contador in range(1, x + 1):
        resultado *= contador

n = int(input("Coloque 'n'\n"))
k = int(input("Coloque 'k'\n"))

arranjo = (fatoriar(n)) / (fatoriar(n - k))