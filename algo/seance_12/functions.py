from math import *
def double(nombre):
    return nombre *2
print(double(4))


def carre(nombre):
    return nombre*nombre

print(carre(4));


def perimetre_rectangle(a,b):
    return a*2+b*2;

print(perimetre_rectangle(4,6));


def perimetre_cercle(r):
    return 2*pi*r;


print(perimetre_cercle(5));


def prittc(a,b):
    return a*(1+b/100)

print(prittc(10,20));

def hello(prenom):
    print(f"hello {prenom} ");

hello("bob");


def table():
    for i in range(1,10):
        for j in range(1,10):
            print(i*j,end=" ");
        print();


table()


