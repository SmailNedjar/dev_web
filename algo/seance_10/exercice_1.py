
nombre_rayon=int(input('nombre_rayon : '));
liste_nom_rayon =[];
for i in range(0,nombre_rayon):
    nom_rayon =input('nom du rayon :')
    liste_nom_rayon = liste_nom_rayon + [nom_rayon];


produits_par_rayon = []

for i in range(0,nombre_rayon):
    liste_produits= []
    print(f'saisir produit rayon {i+1}');
    for j in range(0,2):
        produit=input('produit :');
        liste_produits.append(produit)
    produits_par_rayon = produits_par_rayon + [liste_produits]
print(produits_par_rayon);