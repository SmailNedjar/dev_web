
# liste_burger=['big tasty', 'royal deluxe', 'cheese', 'big mac']

# print(liste_burger);


# liste_burger +=['N'];
# liste_burger[3] = "280"
# print(liste_burger);


# del(liste_burger[2])
# print(liste_burger)




# for i in range(0, len(liste_burger)):
#     print(f"{i} => {liste_burger[i]}")


# for burger in liste_burger:
#     print(burger);

# for i in range(len(liste_burger)-1,-1,-1):
#     print(f"{i} => {liste_burger[i]}");






# stagiaire_a=["doe", "john", "ran-2"];
# stagiaire_b=["baltrosse","hal","ran-1"];


# liste_stagiaires =[

#     stagiaire_a,stagiaire_b
# ]


# print(liste_stagiaires);

# for stagiaire in liste_stagiaires:
#     for prop in stagiaire:
#         print(prop, end=" ")
#     print()


# cpt=0;
# tab_stagiaires=[];
# while (cpt<3):
#     tab=[];
#     nom=input("veuillez saisir votre nom :");
#     prenom=input("veuillez saisir votre prenom :");
#     promo=input("veuillez saisir votre groupe :");
#     tab+=[nom,prenom,promo]
#     tab_stagiaires+=[tab];
#     cpt=cpt+1;
# print(tab_stagiaires);


# #deuxieme methode
# liste_stagiaires=[]
# for i in range(3):
#     liste_stagiaires+=[[
#         input("nom :"),
#         input("prenom :"),
#         input("promo :")
#     ]];
# print(liste_stagiaires);




import os
map =[
    [4,4,4,4,4,4,4,4,4,1,4],
    [4,1,1,1,1,1,1,1,1,1,4],
    [4,1,1,1,1,1,1,1,1,1,4],
    [4,1,1,1,1,1,1,1,1,1,4],
    [4,1,1,1,1,1,1,1,1,1,4],
    [4,1,1,1,1,2,1,1,1,1,4],
    [4,1,1,1,1,1,1,1,1,1,4],
    [4,1,1,1,1,1,1,1,1,1,4],
    [4,1,1,1,1,1,1,1,1,1,4],
    [4,1,1,1,1,1,1,1,1,1,4],
    [4,4,4,4,4,4,4,4,4,4,4]];

pacman_x=len(map[0])//2;
pacman_y=len(map)//2;
map[pacman_y][pacman_x] = 2;

while True:
    os.system("cls")
    for y in range(len(map)):
        for x in range(len(map[0])):
            if map[y][x] == 0:
                print(" ", end=" ")
            if map[y][x] == 1:
                print(".", end=" ")
            if map[y][x] == 2:
                print("O", end=" ")
            if map[y][x] == 3:
                print("F", end=" ")
            if map[y][x] == 4:
                print("#", end=" ")
        print();
    dir = input("direction (zqsd)");
    map[pacman_y][pacman_x] = 0;

    if dir=="z":
        pacman_y =pacman_y -1;
    if dir=="s":
        pacman_y =pacman_y +1;
    if dir=="q":
        pacman_x =pacman_x -1;
    if dir=="d":
        pacman_x =pacman_x +1;

    map[pacman_y][pacman_x] = 2;

