annee_naissance = int(input("saisir annee de naissance :"))
import datetime
annee_actuelle= datetime.datetime.now().year
age=annee_actuelle-annee_naissance

if(age<3):
    print("le bébé a gagné une palette :")
else:
    print("le bebe n'a pas gagné de palette")