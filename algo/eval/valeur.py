valeur_voiture = 56000 * pow((1-7/100),18);
print(valeur_voiture);





#utilisation d'une fonction
def valeur_voiture_x_annee(année_achat, valeur_voiture):
    duree=annee_vente - annee_achat;
    valeur_voiture = 56000 * pow((1-7/100),duree);
    return valeur_voiture;

annee_achat = int(input("entrez année achat voiture :"));
annee_vente= int(input("entrez l'annee desirée de vente : "));

print(valeur_voiture_x_annee(annee_achat, annee_vente));
