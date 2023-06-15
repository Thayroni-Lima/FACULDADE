#Exercício 10

num = 1

while num > 0:
    cont = 0
    x = 1

    while x <= num:
        if num % x == 0:
            cont = cont + 1
        x = x + 1

    if cont == 2:
        print(num)
    else:
        print("---------")
    num = num + 1