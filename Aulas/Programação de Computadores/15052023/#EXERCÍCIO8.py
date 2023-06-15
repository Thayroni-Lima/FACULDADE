#EXERCÍCIO8

peso = float(input("Qual o seu peso em kg?\n"))
altura = float(input("Qual a sua altra em m?\n"))

imc = int(peso / (altura ** 2))

if 18.5 > imc:
    estado = " está abaixo do peso"
elif 24.9 > imc >= 18.5:
    estado = " está com o peso normal"
elif 29.9 > imc >= 25:
    estado = "está acima do peso"
else:
    estado = "é considerado obeso"

print(f"Seu IMC é {imc} e você {estado}.")