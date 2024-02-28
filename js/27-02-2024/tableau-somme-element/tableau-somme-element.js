const table = [10, 5 , 5, 42, 62, 764, 456, 14165, 46, 5511, 21, 545, 515];



function somme(table) {
    let somme= 0;
    table.forEach(valeur => {
        somme = somme + valeur;

    });return somme;
}


console.log(somme(table));


// autre methode
table.reduce((acc, num) => {
    return acc + num;
}, 0);