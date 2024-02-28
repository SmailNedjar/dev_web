const table = [10, 5 , 5, 42, 62, 764, 456, 14165, 46, 5511, 21, 545, 515];
let max=0;
function plusgrandnombre (table)  {
    table.forEach(element => {
        if (element >= max) {
            max = element;
        }
    }); return max;
}; 


console.log(plusgrandnombre(table));

console.log(Math.max(...table));