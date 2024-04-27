
let estSurvol = false;
let compteur = 0;
const carre = document.querySelector('.square');
let intervalId; 


carre.addEventListener('mouseenter', () => {
    estSurvol = true;
    intervalId = setInterval(() => {
        compteur = compteur + 3;
        carre.style.left = compteur + "px";
    }, 10);
});


carre.addEventListener('mouseleave', () => {

    clearInterval(intervalId);
});

