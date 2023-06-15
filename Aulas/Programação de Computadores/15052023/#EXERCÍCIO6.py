#EXERCÍCIO6

a = int(input("Digite a\n"))
b = int(input("Digite a\n"))
c = int(input("Digite a\n"))

delta = (b ** 2) - (4 * a * c)

x1 = ((-1) * b + (delta ** 1/2))/2*a
x2 = ((-1) * b - (delta ** 1/2))/2*a


if delta < 0:
    print("Não há solução real")
elif delta == 0:
    print(x1,x2)
else:
    print(x1,x2)
