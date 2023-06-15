valor = int(input("Digite o valor\n"))
if valor < 100:
    x = 1
    while x > 0:
        i = 1
        while i <= valor:
            print("*"*i)
            i = i + 5
        else:
            while i >= 1:
                print("*"*i)
                i = i - 2
else: 
    print("vai se lascar")