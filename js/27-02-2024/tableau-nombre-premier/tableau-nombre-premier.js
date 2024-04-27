const array = [
    76, 23, 41, 95, 12, 87, 32, 68, 55, 19, 
    84, 6, 39, 70, 50, 29, 62, 90, 8, 72, 
    18, 97, 3, 43, 25, 83, 34, 64, 99, 57, 
    48, 20, 74, 14, 59, 27, 35, 89, 2, 78, 
    9, 52, 66, 86, 36, 31, 60, 11, 93, 67
];


function nombrepremier (array) {
    for (j=0; j < array.length; j++) {
        for ( i=2; i < array[j]; i++){
            if ((array[j]) %  i ==0) {
                array.splice(j,1);
                j--;
                break;
            }
        }
    }return  array
}

console.log(nombrepremier(array))





const primenumber = [];

array.forEach((num) => {
    if (num ===0) return
    for (i=2; i <num; i++) {
        if  (num % i ===0) {
            return;
        }
    }
    primenumber.push(num);
});

console.log(primenumber);