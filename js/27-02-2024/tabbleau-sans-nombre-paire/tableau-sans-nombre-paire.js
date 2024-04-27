const table = [10, 5, 2, 3, 4, 5, 445 , 8, 60, 40, 100, 5 , 3 , 21]


function nombreimpair(table) {
    const table2 =[];
    table.forEach(element => {
        if (element %2 !== 0) {
            table2.push(element)
        } 
    });return table2;
}

console.log(nombreimpair(table));


const oddnumber = table.filter((num) => {
    return num % 2!==0;
})