const firstNames = ["Noé", "Marc", "Dave", "Eva", "Jean", "Alex", "Ada", "Lia", "Maé", "Mya", "Noa"];


function randomfrominterval(min,max) {
    return Math.floor(Math.random() *(max - min) + min);
}

firstNames.sort();
const student = firstNames.map((firstName) => {
    return {firstName: firstName, type :"humain", mark : randomfrominterval(0,20)};
 }).sort((a,b) => a.mark - b.mark
 );
let somme =0;

student.forEach(student => somme += student.mark);

console.log(student, (somme/student.length).toFixed(2));