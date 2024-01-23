typeforfait= int(input("veuillez saisir 1 si vous voulez un forfait journalier ou 2 pour un forfait saisonier : "));
age = int(input("veuillez saisir votre age :"));
if (age<12):
    statut= "enfant";
elif(age>60):
    statut= "senior";
else:
    statut= "adulte";


if (statut=="enfant" and typeforfait==1):
    tarif_unitaire=18.70;
    print(f"votre tarif unitaire est {tarif_unitaire} euros et votre statut est {statut}");
if (statut=="enfant" and typeforfait==2):
    tarif_unitaire=300;
    print(f"votre tarif unitaire est {tarif_unitaire} euros et votre statut est {statut}");
if (statut=="senior" and typeforfait==1):
    tarif_unitaire=21.40;
    print(f"votre tarif unitaire est {tarif_unitaire} euros et votre statut est {statut}");
if (statut=="senior" and typeforfait==2):
    tarif_unitaire=340;
    print(f"votre tarif unitaire est {tarif_unitaire} euros et votre statut est {statut}");
if (statut=="adulte" and typeforfait==1):
    tarif_unitaire=25.8;
    print(f"votre tarif unitaire est {tarif_unitaire} euros et votre statut est {statut}");
if (statut=="adulte" and typeforfait==2):
    tarif_unitaire=510;
    print(f"votre tarif unitaire est {tarif_unitaire} euros et votre statut est {statut}");








#methode fonction
def function_statut():
    typeforfait= int(input("veuillez saisir 1 si vous voulez un forfait journalier ou 2 pour un forfait saisonier : "));
    age = int(input("veuillez saisir votre age :"));
    if (age<12):
        statut= "enfant";
    elif(age>60):
        statut= "senior";
    else:
        statut= "adulte";
    return statut, typeforfait;
def tarif():
    statut_tuple= function_statut();
    typeforfait = statut_tuple[1];
    statut= statut_tuple[0];
    if (statut=="enfant" and typeforfait==1):
        tarif_unitaire=18.70;
    if (statut=="enfant" and typeforfait==2):
        tarif_unitaire=300;
    if (statut=="senior" and typeforfait==1):
        tarif_unitaire=21.40;   
    if (statut=="senior" and typeforfait==2):
        tarif_unitaire=340;   
    if (statut=="adulte" and typeforfait==1):
        tarif_unitaire=25.8;   
    if (statut=="adulte" and typeforfait==2):
        tarif_unitaire=510;
    
    return statut, tarif_unitaire;

resultat_prix_forfait_unitaire = tarif()
print(f"votre tarif unitaire est {resultat_prix_forfait_unitaire[1]} euros et votre statut est {resultat_prix_forfait_unitaire[0]}");
