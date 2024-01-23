note_math = float(input("saisir note de math :"))
note_francais = float(input("saisir note de francais :"))
note_geometrie = float(input("saisir note de geometrie :"))
note_informatique = float(input("saisir note de informatique :"))

coeff_math = int(input("saisir coefficient math :"))
coeff_francais = int(input("saisir coefficient math :"))
coeff_geometrie = int(input("saisir coefficient math :"))
coeff_informatique = int(input("saisir coefficient math :"))

moyenne = (note_math*coeff_math+note_francais*coeff_francais+note_geometrie*coeff_geometrie+note_informatique*coeff_informatique)/(coeff_math+coeff_francais+coeff_geometrie+coeff_informatique)

print("votre moyenne :", round(moyenne, 2))

