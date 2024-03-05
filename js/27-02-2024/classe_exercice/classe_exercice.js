
const dw1 = [
  {
    firstName: "Jean",
    gender: "male",
    js: {
      mark: 12,
      rate: 3
    },
    english: {
      mark: 7,
      rate: 2
    }
  },
  {
    firstName: "Marc",
    gender: "male",
    js: {
      mark: 9,
      rate: 3
    },
    english: {
      mark: 19,
      rate: 2
    }
  },
  {
    firstName: "Amar",
    gender: "male",
    js: {
      mark: 16,
      rate: 3
    },
    english: {
      mark: 2,
      rate: 2
    }
  },
  {
    firstName: "Oscar",
    gender: "male",
    js: {
      mark: 16,
      rate: 3
    },
    english: {
      mark: 12,
      rate: 2
    }
  },
  {
    firstName: "Juliette",
    gender: "female",
    js: {
      mark: 10,
      rate: 3
    },
    english: {
      mark: 11,
      rate: 2
    }
  }
];
const dw2 = [
  {
    firstName: "Jordan",
    gender: "male",
    js: {
      mark: 12,
      rate: 3
    },
    english: {
      mark: 4,
      rate: 2
    }
  },
  {
    firstName: "Baptiste",
    gender: "male",
    js: {
      mark: 12,
      rate: 3
    },
    english: {
      mark: 9,
      rate: 2
    }
  },
  {
    firstName: "Hélène",
    gender: "female",
    js: {
      mark: 13,
      rate: 3
    },
    english: {
      mark: 20,
      rate: 2
    }
  },
  {
    firstName: "Paola",
    gender: "female",
    js: {
      mark: 12,
      rate: 3
    },
    english: {
      mark: 7,
      rate: 2
    }
  }
];

const students = dw1.concat(dw2);


// 1. Combien y a t il d'élève dans la classe dw1 puis dw2 et dans toutes les classes ?

dw1.length;
dw2.length;
students.length;

// 2. Lister l'ensemble des élèves des deux classes dans l'ordre alphabétique

students.sort((a,b)=> a.firstName > b.firstName ? 1 : -1);


// 3. Prendre les 3 premiers élèves de la classe dw1

const thirdDw1 = dw1.slice(0,3);


// 4. Prendre le dernier élève de la classe dw1

//const lastDw1 = dw1.slice(-1);
const lastDw1 = dw1[dw1.length - 1];


// 5. Moyenne générale de chaque élève

const studentsWithAverage = dw1.map((students)=> {

const average = (students.js.mark * students.js.rate + students.english.mark * students.js.rate) / (students.js.rate + students.js.rate);
return {...students, average : average};
});


// 6. Moyenne de la classe dw1 en js ?

const averagedw1 = (dw1.map((student) => (student.js.mark * student.js.rate )/ student.js.rate
).reduce((sum, average) => sum+ average,0))/dw1.length;

//jsaverage.reduce((sum, average) => sum+ average,0);
console.log(averagedw1);

// 7. Moyenne des deux classes en js ?

const averagedw2 = (dw2.map((student) => (student.js.mark * student.js.rate )/ student.js.rate
).reduce((sum, average) => sum+ average,0))/dw2.length;

console.log((averagedw1 + averagedw2)/2);

// 8. Meilleure moyenne de la classe en js ?

students.sort((a,b) =>b.js.mark - a.js.mark);

console.log(students[0]);


// 9. Meilleur élève des deux classes

studentsWithAverage.sort((a,b) => b.average - a.average)
console.log(studentsWithAverage[0]);  



// 10. Meilleure fille des deux classes en anglais

const bestEnglishfemale = studentsWithAverage.filter((student) => {
  return student.gender === 'female';
}).sort((a,b) => b.english.mark - a.english.mark);

console.log(bestEnglishfemale[0]);




// 11. Meilleur garcon en moyenne générale

const bestEnglishmale = studentsWithAverage.filter((student) => {
  return student.gender === 'male';
}).sort((a,b) => b.average - a.average);

console.log(bestEnglishmale[0]);




// 12. Qui a la note médiane en anglais parmi dw1 ?

dw1.sort((a,b) => {
  return b.english.mark - a.english.mark
});
console.log(dw1[Math.floor(dw1.length/2)]);



// 12.a. Donner la position de Jean dans la classe

studentsWithAverage.sort((a,b) => b.average - a.average);

const jeanindex = studentsWithAverage.findIndex((students) => {
  return students.firstName=== "jean"
});

console.log(jeanindex + 1 + "/" + studentsWithAverage.length);



// 13. Qui a la moyenne médiane générale dw1 + dw2 ?

studentsWithAverage.sort((a,b) => {
  return a.average - b.average
});
console.log(studentsWithAverage[Math.floor(studentsWithAverage.length/2)])



// 14. Moyenne générale des filles et moyenne générale des garcons ?

const males = studentsWithAverage.filter((student) => {
  return student.gender === "male"
})


const malesaverage = males.reduce((sum, male) => sum+=male.average, 0 ) / males.length;

console.log(malesaverage)

const females = studentsWithAverage.filter((student) => {
  return student.gender === "female"
})


const femalesaverage = females.reduce((sum, female) => sum+=female.average, 0 ) / females.length;

console.log(femalesaverage)


// 15. Qui sont les meilleurs en js, les filles ou les garcons ?

const  malesJsaverage= males.reduce((sum, male) => sum +=male.js.mark, 0)/males.length;
const  femalesJsaverage= females.reduce((sum, female) => sum +=female.js.mark, 0)/females.length;

console.log(malesJsaverage.toFixed[1], femalesJsaverage.toFixed[1]);




// 16. Récupérer les filles des classes dw1 et dw2 et les classer dans l'ordre de leurs moyennes générales

females.sort((a,b) => b.average - a.average);

console.log(females);