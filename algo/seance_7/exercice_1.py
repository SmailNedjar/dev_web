nombres=(input("entrez une liste de chiffres"));
liste=nombres.split(' ');
max=0;
liste3=[];

for i in range(0,len(liste)):
    if int(liste[i])>=int(max):
        max=liste[i];
if(int(max)>=len(liste)):
    liste2=['']*int(max);
else:
    liste2=['']*len(liste);

for i in range(0,len(liste)):
    liste2[int(liste[i])-1]=int(liste[i]);

for j in range(0,len(liste2)):     
    if(liste2[j] != ""):
        liste3.append(liste2[j]);
            

print(liste3);

#ordre decroissant
for i in range(len (liste)-1,-1, -1):
    minimum=i
    for j in range(i-1,-1, -1):
        if liste[j]<liste[minimum] :
            minimum = j
            
    liste[i], liste[minimum] = liste[minimum], liste[i];

print(liste);

#ordre croissant
for i in range(0,len (liste)):
    minimum=i
    for j in range(i+1,len(liste), +1):
        if liste[j]<liste[minimum] :
            minimum = j
            
    liste[i], liste[minimum] = liste[minimum], liste[i];

print(liste);
