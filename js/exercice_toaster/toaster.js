 let totaster = document.querySelector('#toasterContainer');

 let butonsucces = document.querySelector('.success')
 let butonerror = document.querySelector('.error')
 

 butonsucces.addEventListener('click', () => {
    const newdiv = document.createElement("div");
    newdiv.innerHTML =" success du processus de validation !";
    newdiv.classList.add('popupSuccess');
    newdiv.classList.add('popup');
    totaster.append(newdiv);
    setTimeout (() => {
        newdiv.remove();}, 1500)
    
 })

 butonerror.addEventListener('click', () => {
    const newdiv = document.createElement("div");
    newdiv.innerHTML =" error du processus de validation !";
    newdiv.classList.add('popupError');
    newdiv.classList.add('popup');
    totaster.append(newdiv);
     setTimeout (() => {
        newdiv.remove();}, 1500)
 })
