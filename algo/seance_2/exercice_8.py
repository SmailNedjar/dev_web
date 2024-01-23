prix_Unitaire = float(input("saisir prix unitaire ht :"))
quantité_Commande = int(input("saisir quantité commande :"))
tva = float(input("veuillez saisir le taux de la TVA en pourcentage :"))

prix_Totale_ht = prix_Unitaire * quantité_Commande
prix_Totale_ht_apres_reduction = prix_Totale_ht * (1 - 0.15)

prix_ttc = prix_Totale_ht_apres_reduction * (1+ tva/100)

print("prix TTC ", prix_ttc)