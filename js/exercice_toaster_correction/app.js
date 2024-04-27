const btnSuccess = document.querySelector("#btnSuccess");
const btnError = document.querySelector("#btnError");
const container = document.querySelector("#toasterContainer");

function removeToast(el) {
    el.classList.add("hidden");
    setTimeout(() => {
        el.remove();
    }, 500)
}


function createAndDeleteToast(typeOfToast) {
    const div = document.createElement("div");
    div.classList.add("toast")

    div.innerHTML = typeOfToast;
    div.classList.add(typeOfToast);

    div.style.color = "white";
    container.append(div);

    setTimeout(() => removeToast(div), 1500)
}


btnSuccess.addEventListener("click", () => createAndDeleteToast("SUCCESS"))
btnError.addEventListener("click", () => createAndDeleteToast("ERROR"))

/*butonSucces.addEventListener("click", () => {
    const div = document.createElement("div");
    div.innerHTML ="success";
    div.style.backgroundColor ="green";
    div.style.color = "white";
    container.append(div);

    setTimeout(() => {
        div.remove();
    }, 1000)});


butonError.addEventListener("click", () => {
    const div = document.createElement("div");
    div.innerHTML ="success";
    div.style.backgroundColor ="green";
    div.style.color = "white";
    container.append(div);

    setTimeout(() => {
        div.remove();
    }, 1000)});
*/