let agregarProvincia = () => {
    console.log("dentro");
    let sProvincia = document.querySelector("#txtProvincia").value.trim();
    let sCod = document.querySelector("#txtCodProvincia").value.trim();
    let lstIzquierda = document.querySelector("#lstIzquierda");

    let option = document.createElement("option");
    option.value = sCod;
    option.textContent = sProvincia;

    lstIzquierda.appendChild(option);

}

let btnAgregar = document.querySelector("#btnAgregar");
btnAgregar.addEventListener("click", agregarProvincia);