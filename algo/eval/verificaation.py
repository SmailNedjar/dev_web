
nombre = int(input("veuilliez saisir un nombre entre 10 et 20 :"));


while(nombre >20 or nombre <10):
    if(nombre > 20):
        print("plus petit !");
    if(nombre <10):
        print("plus grand !");
    nombre = int(input("veuilliez saisir un nombre netre 10 et 20 :"));




#methode avec fonction

nombre = int(input("veuilliez saisir un nombre entre 10 et 20 :"));

def verification():
    if(nombre>20):
        reponse = "plus petit !";
    if (nombre<10):
        reponse = "plus grand !";
    return reponse;

print(verification());

while(nombre>20 or nombre<10):
    nombre = int(input("veuilliez saisir un nombre entre 10 et 20 :"));
    print(verification());