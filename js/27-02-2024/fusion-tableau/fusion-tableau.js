const firstarray = [10, 5 , 5, 42, 62, 764, 456, 14165, 46, 5511, 21, 545, 515];
const secondearray= ['bob', 'alice', 'toto', 'tata', 'titi', 'albert', 'einsten', 'turing', 'perelman'];


const mergearrays = firstarray.concat(secondearray);

console.log(mergearrays);

const mergedarrays2 = [...firstarray,...secondearray]

console.log(mergedarrays2);



const mergedArray = firstarray.map(element => element);
secondearray.map(element => mergedArray.push(element));

console.log(mergedArray);
