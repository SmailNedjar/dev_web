max=0;
verité=1;
nombre=int(input("veuillez entrer des nombres successivement et zero pour arreter la saisie:"))
while(verité):
    if(nombre!=0):
        nombre=int(input("veuillez entrer des nombres successivement et zero pour arreter la saisie:"))
        if nombre>max:
            max=nombre;
    elif(nombre==0):
        verité=0;
print(f"le nombre le plus grand est {max}")