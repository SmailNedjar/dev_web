tab=["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t"];

def recherche(tab,element):
    for i in range(0,len(tab)):
        if tab[i] == element:
            return i;

print(recherche(tab,"e"));


tab2=[];
def inverse():
    for i in range((len(tab))-1,-1,-1):
        tab2.append(tab[i]);
    return tab2;
    
print(inverse())

tab=[2,5,9,3,52,4,8,2,6,42,93,12,3,78,6];


def croissance():
    for i in range(0,len(tab)-1):
        indmin = i;
        for j in range(i+1,len(tab)):
            if tab[j] < tab[indmin]: 
                indmin = j
        tab[indmin],tab[i]=tab[i],tab[indmin]
    return tab;

print(croissance());

sudoku_non_valide = [
    [5, 3, 4, 6, 7, 8, 9, 1, 2],
    [6, 7, 2, 1, 9, 5, 3, 4, 8],
    [1, 9, 8, 3, 4, 2, 5, 6, 7],
    [8, 5, 9, 7, 6, 1, 4, 2, 3],
    [4, 2, 6, 8, 5, 3, 7, 9, 1],
    [7, 1, 3, 9, 2, 4, 8, 5, 6],
    [9, 6, 1, 5, 3, 7, 2, 8, 4],
    [2, 8, 7, 4, 1, 9, 6, 3, 5],
    [3, 4, 5, 2, 8, 6, 1, 7, 9]
]
somme=0;
somme_colonne=0;
somme_ligne=0;
test=0;
def is_even():
    global somme_colonne;
    global somme_ligne;
    global somme;
    for i in range(0,len(sudoku_non_valide[0])):
            somme += sudoku_non_valide[0][i];
            temp_somme=somme;
    for i in range(0,len(sudoku_non_valide[0])):
        for j in range(0,len(sudoku_non_valide)):
            somme_ligne = somme_ligne+ sudoku_non_valide[i][j];
            somme_colonne= somme_colonne+ sudoku_non_valide[j][i];
        if somme_ligne != temp_somme or somme_colonne != temp_somme:
            booleen= False;
            break;
        else:
            booleen=True;
        somme_colonne=0;
        somme_ligne=0;
    return booleen, somme_ligne, somme_colonne, temp_somme;


print(is_even());





sudoku_valide = [
    [5, 3, 4, 6, 7, 8, 9, 1, 2],
    [6, 7, 2, 1, 9, 5, 3, 4, 8],
    [1, 9, 8, 3, 4, 2, 5, 6, 7],
    [8, 5, 9, 7, 6, 1, 4, 2, 3],
    [4, 2, 6, 8, 5, 3, 7, 9, 1],
    [7, 1, 3, 9, 2, 4, 8, 5, 6],
    [9, 6, 1, 5, 3, 7, 2, 8, 4],
    [2, 8, 7, 4, 1, 9, 6, 3, 5],
    [3, 4, 5, 2, 8, 6, 1, 7, 9]
]



somme=0;
somme_ligne=0;
somme_colonne=0;
def is_even():
    global somme;
    global somme_ligne;
    global somme_colonne;

    for i in range(0,len(sudoku_valide[0])):
            somme += sudoku_valide[0][i];
            temp_somme=somme;
    for i in range(0,len(sudoku_valide[0])):
        for j in range(0,len(sudoku_valide)):
            somme_ligne = somme_ligne+ sudoku_valide[i][j];
            somme_colonne= somme_colonne + sudoku_valide[j][i];
        if somme_ligne != temp_somme or somme_colonne != temp_somme:
            booleen= False;
        else:
            booleen=True;
        somme_colonne=0;
        somme_ligne=0;
    return booleen;


print(is_even());

