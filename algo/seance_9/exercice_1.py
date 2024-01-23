nombre = int(input("saisir nombre de valeur du tableau : "));
tab=[];
for i in range(1, nombre+1):
    tab.append(i);

print(tab);


#autre methode
tab=[]
for i in range(1, nombre+1):
    tab =tab + [i];

print(tab);