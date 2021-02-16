let generarHTMLInicial = () => {
    let $contenedor = document.createElement("div");
    $contenedor.id = "orden";

    let $primerHijo = document.createElement("div");
    $primerHijo.id = "uno";
    $primerHijo.classList.add("item");
    $primerHijo.textContent = "Primera";

    let $segundoHijo = document.createElement("div");
    $segundoHijo.id = "dos";
    $segundoHijo.classList.add("item");
    $segundoHijo.textContent = "Segunda";

    let $tercerHijo = document.createElement("div");
    $tercerHijo.id = "tres";
    $tercerHijo.classList.add("item");
    $tercerHijo.textContent = "Tercera";

    let $cuartoHijo = document.createElement("div");
    $cuartoHijo.id = "cuatro";
    $cuartoHijo.classList.add("item");
    $cuartoHijo.textContent = "Cuarta";

    //creando botones
    let $btn = document.createElement("input");
    $btn.type = "button";
    $btn.value = "Comprobar id";
    $btn.addEventListener("click", comprobarId);

    let $btnDeriv = document.createElement("input");
    $btnDeriv.type = "button";
    $btnDeriv.value = "Generar HTML derivado";
    $btnDeriv.addEventListener("click", generarHTMLDerivado);

    //insertando en el DOM
    document.body.appendChild($contenedor);
    document.body.appendChild($btn);
    document.body.appendChild($btnDeriv);

    $contenedor.appendChild($primerHijo);
    $contenedor.appendChild($segundoHijo);
    $contenedor.appendChild($tercerHijo);
    $contenedor.appendChild($cuartoHijo);

    //botón fin
    let $btnFin = document.createElement("input");
    $btnFin.type = "button";
    $btnFin.value = "FIN";
    $btnFin.addEventListener("click", listarIds);
    document.body.appendChild($btnFin);
};

let comprobarId = () => {
    let vDiv = document.querySelectorAll("#orden>div");
    for (let i = 0; i < vDiv.length; i++) {
        if (vDiv[i].id == "") alert(`Hijo ${i + 1}, sin ID definido`);
    }
};

let generarHTMLDerivado = (oE) => {
    let vHijos = document.querySelectorAll("#orden>div");

    for (let i = 0; i < vHijos.length; i++) {
        let $divImgUp = document.createElement("div");
        $divImgUp.classList.add("imgUp");


        let $divImgDown = document.createElement("div");
        $divImgDown.classList.add("imgDown");


        let $divTexto = document.createElement("div");
        $divTexto.classList.add("texto");
        $divTexto.textContent = vHijos[i].textContent;

        vHijos[i].removeChild(vHijos[i].firstChild);
        vHijos[i].appendChild($divImgUp);
        vHijos[i].appendChild($divImgDown);
        vHijos[i].appendChild($divTexto);
    }

    oE.target.remove();
};


let listarIds = () => {
    let vDiv = document.querySelectorAll("#orden>div");
    let sResultado = "";
    for (let i = 0; i < vDiv.length; i++) {
        sResultado += vDiv[i].id + ",";
    }
    sResultado

    let p = document.createElement("p");
    p.textContent = sResultado.substring(0, sResultado.length - 1);
    document.body.appendChild(p);

}

let mover = (oE) => {
    if (oE.target.classList.contains("imgDown")) {
        let $capa = oE.target.parentElement;
        if ($capa.nextElementSibling) {
            $capa.parentElement.insertBefore($capa.nextElementSibling, $capa);
        } else {
            $capa.parentElement.insertBefore($capa, $capa.parentElement.firstElementChild);
        }
    } else if (oE.target.classList.contains("imgUp")) {
        let $capa = oE.target.parentElement;
        if ($capa.previousElementSibling) {
            $capa.parentElement.insertBefore($capa, $capa.previousElementSibling);
        } else {
            $capa.parentElement.appendChild($capa);
        }
    }
}

let agregarComportamiento = () => {
    let parent = document.querySelector("#orden");

    parent.addEventListener("click", mover);

}

generarHTMLInicial();
agregarComportamiento();