nombre_doigts_A = int(input("votre nombre de doigts de A :"))
nombre_doigts_B = int(input("votre nombre de doigts de B :"))

somme = nombre_doigts_A+nombre_doigts_B
if(somme%2==0):
    print("A est le gagnant")
else:
    print("B est le gagnant")