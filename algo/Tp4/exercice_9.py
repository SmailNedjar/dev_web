nombre_dimension=int(input("quel est le nombre de dimension :"));
nombre_pointe=int(input("quel est le nombre de pointe :"));

for i in range(0,nombre_pointe,+1):
    print("_ ", end="")
print("");
for i in range(0,nombre_dimension,+1):
    for j in range(0,nombre_pointe,+1):
        print("| ", end="")
    print("");