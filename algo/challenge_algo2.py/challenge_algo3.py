from random import *
#autre solution
position="O"
position_aleatoire_x=randint(1,3)
position_aleatoire_y=randint(1,3)
tab=[["X","X","X","X","X"],["X"," "," "," ","X"],["X"," ",position," ","X"],["X"," "," "," ","X"],["X","X","X","X","X"]]

while (bool):
    if tab[position_aleatoire_y][position_aleatoire_x]=="O":
        position_aleatoire_x=randint(1,3)
        position_aleatoire_y=randint(1,3)
    else:
        bool=False

tab[position_aleatoire_y][position_aleatoire_x]=u"\u2666"

for i in range(0,5):
    for j in range(0,5):
        print(tab[i][j], end="")
    print("")

position_x=2
position_y=2
position_x_avant=2
position_y_avant=2
cpt=0

while (cpt<8):
    cpt=0
    touche=input("z pour monter, d pour aller a droite q pour aller a gauche et s pour descendre :")

    position_x_avant=position_x
    position_y_avant=position_y
    
    if touche=="s":
        position_y = position_y +1;
    if touche=="d":
        position_x = position_x+1;
    if touche=="z":
        position_y = position_y-1;
    if touche=="q":
        position_x = position_x-1;
    
                
    
    tab[position_y][position_x] = "O" 
    tab[position_y_avant][position_x_avant]= " ";
    for i in range(1,4):
        for j in range(1,4):
           if tab[i][j]==" ":
                cpt=cpt+1   

    print(cpt)
    for i in range(0,5):
        for j in range(0,5):
            print(tab[i][j], end="");
        print("");
    tab[position_aleatoire_y][position_aleatoire_x]= " ";
    position_aleatoire_x=randint(1,3)
    position_aleatoire_y=randint(1,3)
    while (bool):
        if tab[position_aleatoire_y][position_aleatoire_x]=="O":
            position_aleatoire_x=randint(1,3)
            position_aleatoire_y=randint(1,3)
        else:
            bool=False
    
    tab[position_aleatoire_y][position_aleatoire_x]=u"\u2666"
               
        

