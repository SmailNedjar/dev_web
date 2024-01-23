position="O"
tab=[["X","X","X","X","X"],["X",u"\u2666",u"\u2666",u"\u2666","X"],["X",u"\u2666",position,u"\u2666","X"],["X",u"\u2666",u"\u2666",u"\u2666","X"],["X","X","X","X","X"]]

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
    cpt=0;
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
                   
                
    for i in range(0,5):
        for j in range(0,5):
            print(tab[i][j], end="");
        print("");



