function factorielfor(n) {
    let resultat = 1;
    for (let i = 1; i <= n; i++) {
        resultat *= i;
    }return resultat;
}

console.log(factorielfor(0));


function factorielwhile(n) {
    let resultat = 1;
    let i=1
    while (i <= n) {
        resultat *= i;
        i++;
    }return resultat;
}

console.log(factorielwhile(0));



function factorielrecursive(n) {
   
    if (n===0) {
        return 1;
    }return  factorielrecursive(n-1) * n;
}

console.log(factorielrecursive(5));