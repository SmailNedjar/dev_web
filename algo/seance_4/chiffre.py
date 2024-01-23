Romain=["I", "II", "III", "IV", "V", "VI" ,"VII","IIX", "IX", "X"]
arabe = [1, 2, 3, 4, 5, 6, 7, 8 , 9, 10]
entre=int(input("entre 1 et 10 : "))
for loop in range(0,10,1):
    if arabe[loop]==entre:
        print(Romain[loop])