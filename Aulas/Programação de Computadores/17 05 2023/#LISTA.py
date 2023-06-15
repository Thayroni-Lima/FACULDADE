#LISTA

progs = ['Yes', 'Genesis', 'Pink Floyd', 'ELP']

#'Varrendo' a lista
for prog in progs:
    print(prog)

# Trocando o último elemento
progs[-1] = 'King Crimson'
print(progs)

# Incluindo
progs.append("Camel")
print(progs)

# Removendo
progs.remove('Pink Floyd')
print(progs)

# Ordenar
progs.sort()
print(progs)

# Inverter
progs.reverse()
print(progs)