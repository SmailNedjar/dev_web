note_math = float(input("saisir note de math :"))
coeff_math=int(input("saisir coefficient math :"))
note_francais = float(input("saisir note de francais :"))
coeff_francais=int(input("saisir coefficient francais :"))
note_geometrie = float(input("saisir note de geometrie :"))
coeff_geometrie=int(input("saisir coefficent geometrie :"))
note_informatique = float(input("saisir note de informatique :"))
coeff_informatique=int(input("saisir coefficient informatique : "))
bool=True
if ((note_math>=0 and note_math<=20) and (note_francais>=0 and note_francais<=20) and (note_geometrie>=0 and note_geometrie<=20) and (note_informatique>=0 and note_informatique<=20) and (11>coeff_francais>0 and 11>coeff_geometrie>0 and 11>coeff_math>0 and 11>coeff_informatique>0)):
    bool=False

while(bool==True):
    print("erreur de saisie");
    note_math = float(input("saisir note de math :"))
    coeff_math=int(input("saisir coefficient math :"))
    note_francais = float(input("saisir note de francais :"))
    coeff_francais=int(input("saisir coefficient francais :"))
    note_geometrie = float(input("saisir note de geometrie :"))
    coeff_geometrie=int(input("saisir coefficent geometrie :"))
    note_informatique = float(input("saisir note de informatique :"))
    coeff_informatique=int(input("saisir coefficient informatique :"))
    if ((note_math>=0 and note_math<=20) and (note_francais>=0 and note_francais<=20) and (note_geometrie>=0 and note_geometrie<=20) and (note_informatique>0 and note_informatique<20) and (11>coeff_francais>0 and 11>coeff_geometrie>0 and 11>coeff_math>0 and 11>coeff_informatique>0)):
        bool=False

moyenne=(note_math*coeff_math+note_francais*coeff_francais+note_geometrie*coeff_geometrie+note_informatique*coeff_informatique)/(coeff_francais+coeff_informatique+coeff_geometrie+coeff_math)

if bool==False:
    if(16<=moyenne<=20):
        print("la mention est Très bien.")
    elif(12<=moyenne<16):
        print("la mention est bien.")
    elif(8<=moyenne<12):
        print("la mention est Assez bien.")
    elif(4<=moyenne<8):
        print("la mention est Insufisant.")
    elif(0<=moyenne<4):
        print("la mention est Nul.")