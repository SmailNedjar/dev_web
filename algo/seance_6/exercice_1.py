#Ecrire un programme permettant de compter le nombre de fois qu'une lettre est présente dans un texte.
#Le programme doit alors demander le texte et la lettre à rechercher.

#Vous devez ensuite afficher le nombre de fois que la lettre est présente dans le texte.
#Ecrire un programme permettant de compter le nombre de fois qu'une lettre est présente dans un texte.
#Le programme doit alors demander le texte et la lettre à rechercher.

#Vous devez ensuite afficher le nombre de fois que la lettre est présente dans le texte.

texte = input("texte : ");
lettre = input("lettre : ");
cpt = 0;
for i in texte:
    if(i == lettre):
        cpt = cpt + 1;
        
print(f"votre lettre apparait {cpt} fois")



            