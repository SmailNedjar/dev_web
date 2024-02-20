const motatester ="bob";
let longueur =0;

if (typeof motatester !=="string") {
    longueur = -1;
}
for (i=0; i<motatester.length; i++) {
    if (typeof motatester) {
        longueur = i +1;
    }

}
console.log(longueur);

//avec une fonction
function length(motatester){
    let longueur =0;
    if (typeof motatester !=="string") {
        return -1;
    }
    for (i=1; i<motatester.length; i++) {
    
    }
    return i;
}

const longueurmot= length(motatester);
console.log(longueurmot);




function lengthwithwhile(motatester) {
    let longueurdumot=0;
    while (motatester.length>longueurdumot) {
        longueurdumot=longueurdumot+1;
    }
    return longueurdumot
}

console.log(lengthwithwhile(motatester));