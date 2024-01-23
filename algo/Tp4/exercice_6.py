#premiere methode

nombre_base_dix=int(input("veuillez saisir un nombre entier pour la premiere methode:"))
reste_nombre=nombre_base_dix%2

if reste_nombre==0:
    quotient=nombre_base_dix/2;
    binaire="0"
elif reste_nombre!=0:
    quotient=(nombre_base_dix-1)/2
    binaire="1"
    

while quotient>0:
    reste_nombre=quotient%2;
    if reste_nombre==0:
        quotient=quotient/2;
    elif reste_nombre!=0:
        quotient=(quotient -1)/2
    binaire=str(int(reste_nombre))+binaire;
     
print(binaire);




#deuxieme methode

binaire=""
nombre=int(input("entrez nombre decimal pour la deuxieme methode : "));
while nombre >0:
    binaire =str(nombre%2) + binaire;
    nombre = nombre//2;
    
print(binaire)




#troisieme methode

print(str(bin(int(input("entrez nombre decimal pour la troisieme methode : "))))[2:])


