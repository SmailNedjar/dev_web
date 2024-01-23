mot =input("mot : ");
verite = True;
for i in range(0,len(mot)):
    for j in range(len(mot)-i-1,len(mot)-i-2,-1):
        if(mot[i] !=mot[j]):
            print("non")
            verite = False;
            break;
    if(verite == False):
        break;

if(verite == True):
    print("oui")






#autre solution   
bool = True;             
for i in range(0,len(mot)):
    if(mot[i] !=mot[len(mot)-1-i]):
        print("non")
        bool=False;
        break;
        
if(bool ==True):
    print("oui")


#autre solution 
mot_inverse =[];
for i in range(0,len(mot)):
    mot_inverse.append(mot[len(mot)-1-i]);
mot_inverse=''.join(mot_inverse)
if(mot_inverse == mot):
    print("oui")
else:
    print("non")


#autre solution

mot_inverse ="";
for i in range(0,len(mot)):
    mot_inverse=mot[i]+mot_inverse;
if(mot_inverse == mot):
    print("oui")
else:
    print("non")


#autre facon

cpt= 0
for i in range(0,len(mot)):
    if mot[i] != mot[len(mot)-1-i]:
       break; 
    else:
        cpt = cpt+1;
if(cpt == len(mot)):
    print("oui")
else:
    print("non")

#autre facon
draw = "";
for letter in mot:
    draw = letter + draw;
if(draw == mot):
    print("oui")
else:
    print("non")
