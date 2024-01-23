nom = input("veuillez saisir autant de nom que vous souhaitez en tapant entré pour valider et taper fin pour terminer a saisie : ");
NbNom = 0;
while(nom!="fin"):
    NbNom = NbNom + 1;
    nom = input("veuillez saisir autant de nom que vous souahitez et taper fin pour terminer a saisie : ");

print(NbNom);




#methode fonction


def nombre_nom():
    nom = input("veuillez saisir autant de nom que vous souahitez et taper fin pour terminer a saisie : ");
    if (nom=="fin"):
        NbNom =0;
    else:
        NbNom = 1;
    while(nom!="fin"):
        nom = input("veuillez saisir autant de nom que vous souahitez et taper fin pour terminer a saisie : ");
        if(nom=="fin"):
            NbNom = NbNom;
        else:
            NbNom = NbNom + 1;
    return NbNom;

print(nombre_nom());