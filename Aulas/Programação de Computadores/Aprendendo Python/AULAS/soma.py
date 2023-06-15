s = 0
lis = []

num = int(input("Digite um número"))
while num != s:
    lis.append(num)
    num = int(input("Mais um"))

print(len(lis))
print(lis)