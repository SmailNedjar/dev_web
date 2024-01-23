def nombre_pair(n):
    if n%2 == 0:
        return True
    else:
        return False

print(nombre_pair(5));



def is_even(nombre):
    return not bool(nombre%2)