#AULA DE "LOOPS"

x = int(input("Se quiser os pares até 20, digite 1\n"))

if x == 1:
    i = 0
    while i <= 20:
        if i % 2 == 0:
            print(i)
        i = i + 1
else:
    i = 0
    while i <= 20:
        if i % 2 != 0:
            print(i)
        i = i + 1

