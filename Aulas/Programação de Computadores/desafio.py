segundos = int(input("Digite os segundos\n"))

horas = segundos//3600
min = (segundos%3600)//60
seg = (segundos%3600)%60

print(horas, "hrs", min, "mins", seg, "seg")