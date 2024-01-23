# Alain et Catherine organisent une soirée pour des membres de leur club informatique.
# Ils décident que pour être invité il faut :

# - être ami d’Alain et de Catherine ;
# - ou ne pas être ami d’Alain, mais être ami de Catherine ;
# - ou ne pas être ami de Catherine, mais jouer au bridge.

# Pour un membre quelconque, on définit les variables booléennes suivantes par :
# a = 1 s’il est un ami d’Alain,
# b = 1 s’il joue au bridge,
# c = 1 s’il est un ami de Catherine.



a= int(input("vous etes ami d’Alain et de catherine ? tapez 1 pour oui et tapez 0 pour non : "))
b= int(input("vous jouez au bridge ? tapez 1 pour oui et tapez 0 pour non : "))
c= int(input("vous etes ami de Catherine ? tapez 1 pour oui et tapez 0 pour non : "))
if((a==1 or a==0) and (b==1 or b==0) and (c==0 or c==1)):
    if ((a and c) or (not a and c) or(b and not c)):
        print("vous etes invité")
    else:
        print("vous n'etes pas invité")
else:
    print("vous avez entré un nombre non valide")
