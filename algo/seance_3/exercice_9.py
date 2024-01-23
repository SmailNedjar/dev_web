note_math = float(input("saisir note de math :"))
note_francais = float(input("saisir note de francais :"))
note_geometrie = float(input("saisir note de geometrie :"))
note_informatique = float(input("saisir note de informatique :"))

moyenne=(note_math+note_francais+note_geometrie+note_informatique)/4

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