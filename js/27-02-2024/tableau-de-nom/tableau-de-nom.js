const tablenom= ['bob', 'alice', 'toto', 'tata', 'titi', 'albert', 'einsten', 'turing', 'perelman'];
const tableaucommenceA=[]

tablenom.forEach(value => {

if(value.startsWith('a')) {
    tableaucommenceA.push(value);
    
}});

console.log(tableaucommenceA);



//autre methode
const nomA = tablenom.filter((name) => {
    return name.toLowerCase().startsWith('a');
})

console.log(nomA);