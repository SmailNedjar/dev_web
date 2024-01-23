#Ecrire un programme qui intègre les fonctionnalités suivantes :
#demander le nombre de matières à saisir
#stocker le nom des matières
#demander le nombre d'élève à ajouter et stocker leur nom et prénom
#pour chaque élève saisir la note par matière
#afficher tous les élèves avec leur moyenne générales et leurs notes par matières
#afficher la moyenne de la classe par matière
#donner le nom du meilleur élève
#donner le nom du pire élève



nombre_matiere= int(input("saisisez le nombre de matiere : "));
tab=[]

for i in range(0,nombre_matiere):
    tab =tab+ [input("nom de la matiere :")];

nombre_eleve_a_ajouter= int(input("saisisez le nombre eleve a ajouter : "));
tab2=[[[0 for i in range(2)] for j in range(nombre_matiere+1)] for k in range(nombre_eleve_a_ajouter)];


for i in range(0,nombre_eleve_a_ajouter):
    for j in range(1,nombre_matiere+1):
        tab2[i][j][0]= tab[j-1];


for i in range(0,nombre_eleve_a_ajouter):
    nom = input("nom eleve : ");
    prenom = input("prenom eleve : ");
    tab2[i][0][0]= nom
    tab2[i][0][1] =prenom

for i in range(0,nombre_eleve_a_ajouter):
    for j in range(1,nombre_matiere+1):
        note = input(f"note de l'eleve {tab2[i][0][0]} {tab2[i][0][1]} en {tab2[i][j][0]} ");
        tab2[i][j][1] =note;

moyenne=0;
somme=0;
moyenne_classe_par_matiere=0;
somme_par_matiere=0;
moyenne_max=0;
print("");
for i in range(0,nombre_eleve_a_ajouter):
    moyenne=0;
    somme=0;
    for j in range(1,nombre_matiere+1):
        somme = somme + int(tab2[i][j][1])
    moyenne = somme/nombre_matiere
    if moyenne>moyenne_max:
        moyenne_max=moyenne
        nom_meilleur_eleve=tab2[i][0][0]
        prenom_meilleur_eleve=tab2[i][0][1]
    print(f"la moyenne generale de {tab2[i][0][1]} {tab2[i][0][0]} est de {moyenne}", end=" ");
    for k in range(1,nombre_matiere+1):
        print(f"et sa note en {tab2[i][k][0]} est de {tab2[i][k][1]}", end=" ");
    print("");

for i in range(1,nombre_matiere+1):
    for j in range(0,nombre_eleve_a_ajouter):
        somme_par_matiere = somme_par_matiere + int(tab2[j][i][1]);
    moyenne_classe_par_matiere= int(somme_par_matiere)/nombre_eleve_a_ajouter;
    print("");
    print(f"la moyenne de la classe pour la matiere {tab2[0][i][0]} est de {moyenne_classe_par_matiere}");
    moyenne_classe_par_matiere=0;
    somme_par_matiere =0;

moyenne_min=moyenne_max;
for i in range(0,nombre_eleve_a_ajouter):
    somme=0; 
    moyenne=0;
    for j in range(1,nombre_matiere+1):
        somme = somme + int(tab2[i][j][1])
    moyenne = somme/nombre_matiere
    if moyenne<=moyenne_min:
        moyenne_min=moyenne;
        nom_pire_eleve=tab2[i][0][0]
        prenom_pire_eleve=tab2[i][0][1]
print("");
print(f"le meilleur eleve est {prenom_meilleur_eleve} {nom_meilleur_eleve} avec une moyenne de {moyenne_max}") 
print("")
print(f"le pire eleve est {prenom_pire_eleve} {nom_pire_eleve} avec une moyenne de {moyenne_min}")  
print("");
print(tab2)


    
     





