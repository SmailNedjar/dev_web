let btn = document.getElementById("btn");
let cpt = 1;
btn.addEventListener("click", () => {
    if(cpt==1){
        let ul = document.createElement("ul");
        ul.setAttribute("id", "list");
        document.body.append(ul);
    }
    let li = document.createElement("li");
    li.innerText =cpt++;
    document.getElementById("list").append(li);

});


/*let btn2 = document.getElementById("btn2");
let cpt1 = 1;
let cpt2=1;
let tr;
let table;
let bool = false;
btn2.addEventListener("click", () => {
    if(cpt1<=5) {
        let largeur = 100 * cpt1;
        if (cpt1== 1) {
        table = document.createElement("table");
        table.style.height = "100%";
        table.style.borderCollapse = "collapse";
        table.style.border="none";
        document.body.append(table);
        tr = document.createElement("tr");
        table.append(tr);

    }
        let td = document.createElement("td");
        td.style.height = 100 + "px";
        td.style.border = "1px solid black";
        tr.append(td);
        table.style.width = largeur + "px";
        if (cpt1 ==5) {
            bool = true;
        }
        cpt1 += 1;
        
    }
    if (bool==true) {
        if (cpt2==1) {
            tr =document.createElement("tr");
            table.append(tr);
        }

        if (cpt2 <=5) {
            td = document.createElement("td");
            td.style.height = 100 + "px";
            td.style.border = "1px solid black";
            tr.append(td);
            cpt2 = cpt2 + 1;
        }

        if (cpt2==6) {
            cpt2=1;
        }
    }



});*/


let btn2 = document.getElementById("btn2");
let cpt1 = 1;
let table;
let bool = false;
let tr;
let largeur_table =0;
btn2.addEventListener("click", () => {
    if (bool==false) {
        table = document.createElement("table");
        table.style.border = "none";
        table.style.borderCollapse = "collapse";
        document.body.append(table);
        bool = true;
    }
    if (cpt1 == 1) {
        tr = document.createElement("tr");
        table.append(tr);
    }
    if (cpt1 <=5) {
        td = document.createElement("td");
        td.style.border = "1px solid black";
        td.style.height = 100 + "px";
        if (largeur_table <500) {
            largeur_table= cpt1 * 100;
            table.style.width = largeur_table + "px";
        }
        tr.append(td);
        cpt1 += 1;

    }
    if (cpt1 == 6) {
        cpt1=1;
    }


});