a = float(input("saisir nombre a :"))
b = float(input("saisir nombre b :"))

print(f"votre equation est : {a}x + {b} = 0")

if(a==0 and b==0):
    print("l’ensemble des solutions est l’ensemble R.")
elif(a==0 and b !=0):
    print("l’ensemble des solutions est l’ensemble vide.")
elif(a!=0):
    print("la solution est ", -b/a)
