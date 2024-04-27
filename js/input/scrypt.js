const input = document.querySelector("#input")
const select = document.querySelector("#select")

const urgentCol = document.querySelector("#URGENT")
const normalCol = document.querySelector("#NORMAL")
const optionnalCol = document.querySelector("#OPTIONNEL")

const tableauDeTache = []


input.addEventListener("change", (e) => {
    const divTache = document.createElement("div")

    divTache.innerHTML = e.target.value;

    divTache.style.cursor = "pointer"
    divTache.addEventListener("click", () => {
        if (divTache.style.textDecoration === "line-through") {
            divTache.style.textDecoration = "unset"
        } else {
            divTache.style.textDecoration = "line-through"
        }
    })

    let colPriority

    switch (select.value) {
        case "optionnel":
            colPriority = optionnalCol
            break;
        case "normal":
            colPriority = normalCol
            break;
        case "urgent":
            colPriority = urgentCol
            break;
    }

    colPriority.append(divTache)
    input.value = ""
})