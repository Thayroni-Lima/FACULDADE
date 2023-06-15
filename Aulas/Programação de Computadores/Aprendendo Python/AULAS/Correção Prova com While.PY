gab = []
prova = []

qtdd_ques = int(input("Quantas questões tem a prova?\n"))

print("Digite o gabarito da prova a seguir.")
i = 0
while i < qtdd_ques:
    gab.append(input(f"Questão {i+1} do gabarito:\n"))
    print(gab)
    i += 1

print("Digite as respostas da prova do aluno a seguir.")
i = 0
while i < qtdd_ques:
    prova.append(input(f"Questão {i+1} da prova:\n"))
    print(prova)
    i += 1

nota = 0
ques = 0

while ques < qtdd_ques: #usar for depois
    if gab[ques] == prova[ques]:
        nota += 1
    ques += 1
print(f"A nota do aluno é {nota}.")