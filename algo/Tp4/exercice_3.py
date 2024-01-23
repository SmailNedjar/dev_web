from random import *
nombre_magique=randint(1,10);
print(nombre_magique)

nombre=int(input("Entrez un nombre entre 1 et 10: "));

while nombre!= nombre_magique:
    if nombre<=10 and nombre>=1:
        if nombre>nombre_magique:
            print("trop grand");
            nombre=int(input("Entrez un nombre entre 1 et 10: "));
        elif nombre<nombre_magique :
            print("trop petit");
            nombre=int(input("Entrez un nombre entre 1 et 10: "));
    elif nombre>10 or nombre<1:
        print("nombre invalide");
        nombre=int(input("Entrez un nombre entre 1 et 10: "));

if nombre==nombre_magique:
    print("Vous avez gagné!");
