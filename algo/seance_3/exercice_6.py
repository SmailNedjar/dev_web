prix_Ht = float(input("saisir prix hors taxe produit :"))

taux=float(input("Pour une TVA de 5,5 %, saisissez 1 \nPour une TVA de 19,6 %, saisissez 2 \nPour une TVA de 33 %, saisissez 3 \n"))

if(taux==1):
    prix_Ttc = prix_Ht*(1+5.5/100)
    print(f"Le prix HT est de {prix_Ht}, la TVA est de 5.5 % et le prix TTC est de {prix_Ttc}.")
elif(taux==2):
    prix_Ttc = prix_Ht*(1+19.6/100)
    print(f"Le prix HT est de {prix_Ht}, la TVA est de 19.6 % et le prix TTC est de {prix_Ttc}.")
elif(taux==3):
    prix_Ttc = prix_Ht*(1+33.3/100)
    print(f"Le prix HT est de {prix_Ht}, la TVA est de 33.3 % et le prix TTC est de {prix_Ttc}.")