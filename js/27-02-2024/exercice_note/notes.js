const students = [
    { name: 'John', mark:10},
    { name: 'bob', mark:50},
    { name: 'alice', mark:1000},
    { name: 'toto', mark:2}
];

students.sort((a,b) => {
    if (a.mark === b.mark) {
        return (a.name > b.name ? 1 : -1)
    }
    return (a.mark - b.mark)

});

console.log(JSON.stringify(students))