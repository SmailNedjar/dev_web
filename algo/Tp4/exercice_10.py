max=0;

for i in range(0,20,+1):
    nombre=int(input("veuillez entrer 20 nombre successivement en appuyant sur entree apres chaque nombre saisie :"))
    if nombre>max:
        max=nombre;
print(f"le nombre le plus grand est {max}")