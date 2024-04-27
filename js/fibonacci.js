//Calculer le fibonnaci du n-ieme nombre a l'aide d'une boucle for, while puis a l'aide d'une fonction récursive


let tableau = [0,1];
let limite = 30;
for (i = 2; i < limite; i++) {
    tableau[i]= tableau[i-1] + tableau[i-2];
    
}

console.log(tableau);




function fibonacci(j) {
    if (j <= 1) {
        return j ;
    }
    return fibonacci(j - 1) + fibonacci(j - 2); 
}


let tab = [0, 1]; 
for (let i = 2; i < limite; i++) {
    tab.push(fibonacci(i));
}

console.log(tab);

