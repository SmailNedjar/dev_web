const input = document.querySelector('#input');
const parent = document.querySelector('#parent');





input.addEventListener('change', (e) => {
    let newdiv = document.createElement('div');
    let span = document.createElement('span');
    span.innerHTML =" X";
    newdiv.innerHTML = e.target.value;
    parent.append(newdiv);
    newdiv.append(span);
    span.addEventListener('click', () => {
    parent.removeChild(newdiv);
    });
    e.target.value="";
});





