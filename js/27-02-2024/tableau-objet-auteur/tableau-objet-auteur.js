const auteur = [
    {nom : 'bob', age : 30, annee : 1995}, 
    {nom : 'alice', age : 300, annee : 2225}, 
    {nom : 'perelman', age : 60, annee : 1980}, 
    {nom : 'jesus', age : 2000, annee : 0}, 
    {nom : 'einstein', age : 10, annee : 2012}
]
console.log(auteur);

auteur.forEach(value => {
    if (value.annee >2000) {
        console.log(value.nom + ' ' + value.age + ' ' + value.annee);
    }
});


const recentbooks = auteur.filter((book)=> {
    return book.annee > 2000
});

console.log(recentbooks);
