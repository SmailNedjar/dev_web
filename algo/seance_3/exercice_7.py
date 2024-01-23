montant_Ttc= float(input("saisir montant ttc :"))

if(500<=montant_Ttc<1000):
    prix_Final= montant_Ttc*(1-2/100)
    print("prix remisé :", prix_Final)
elif(1000<=montant_Ttc<2000):
    prix_Final= montant_Ttc*(1-5/100)
    print("prix remisé :", prix_Final)
elif(2000<=montant_Ttc):
    prix_Final= montant_Ttc*(1-10/100)
    print("prix remisé :", prix_Final)