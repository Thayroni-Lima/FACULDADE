#EXERCÍCIO 1

def fatorial(n):
    return n * fatorial(n-1) if n != 0 else 1

n = int(input("Digite o valor 'n'\n"))
r = int(input("Digite o valor 'r'\n"))

resultado = fatorial(n)/fatorial(r) * fatorial(n - r)

print(resultado)