epaisseur_feuille=int(input("quel est l'epaisseur de votre feuille en mm: "))
nombre_pli=int(input("combien de fois avez vous pliez la feuille : "))


epaisseur_finale=epaisseur_feuille*pow(2,nombre_pli);

print(f"l'epaisseur_finale est de {epaisseur_finale} mm")
