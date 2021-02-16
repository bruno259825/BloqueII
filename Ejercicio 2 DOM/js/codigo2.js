"use strict";

function validarForm() {

    let sErrores = "";
    let bValido = true; // en principio el formulario es válido

    // Validación Nombre Usuario
    let sUsuario = mform1.username.value.trim();
    let oExpRegNomUs = /^[A-Za-zàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑ]{5,15}$/;

    if (!oExpRegNomUs.test(sUsuario)) {
        bValido = false;
        sErrores = "\n- El Nombre de usuario no tiene el formato definido";
        mform1.username.classList.add("errorForm");
        mform1.username.focus();
    } else {
        mform1.username.classList.remove("errorForm");
    }

    // Validación contraseña 1
    let sPass1 = mform1.password.value.trim();
    let oExpRegPass = /^(?=(?:.*\d))(?=(?:.*[A-Z]))(?=(?:.*[a-z]))\S{6,15}$/;

    if (!oExpRegPass.test(sPass1)) {
        // Si hasta el momento era correcto -> este el primer error
        if (bValido) {
            mform1.password.focus();
            bValido = false;
        }
        sErrores += "\n- La contraseña 1 no tiene el formato correcto (de 6 a 15 caracteres)";
        mform1.password.classList.add("errorForm");
    } else {
        mform1.password.classList.remove("errorForm");
    }

    // Validación contraseña 2 
    let sPass2 = mform1.password2.value.trim();
    // Uso la misma expresión regular que arriba 

    if (!oExpRegPass.test(sPass2)) {
        if (bValido) {
            mform1.password2.focus();
            bValido = false;
        }
        sErrores += "\n- La contraseña 2 no tiene el formato correcto (de 6 a 15 caracteres)";
        mform1.password2.classList.add("errorForm");
    } else {
        mform1.password2.classList.remove("errorForm");
    }


    // Validación de que las dos contraseñas son iguales -----------------------------------------------------------
    console.log(sPass1);
    console.log(sPass2);

    if (sPass1 != sPass2) {
        mform1.password2.focus();
        bValido = false;
        sErrores += "\n- Las contraseñas no coinciden";
        mform1.password2.classList.add("errorForm"); 
    } else {
        alert("Las contraseñas son iguales");
        mform1.password2.classList.remove("errorForm");
    }

    // Validación email 1
    let sEmail1 = mform1.email.value.trim();
    let oExpRegEm = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if (!oExpRegEm.test(sEmail1)) {
        if (bValido) {
            mform1.email.focus();
            bValido = false;
        }
        sErrores += "\n- El email 1 no cumple los requisitos";
        mform1.email.classList.add("errorForm");
    } else {
        mform1.email.classList.remove("errorForm");
    }

    // Validación email 2
    let sEmail2 = mform1.email2.value.trim();

    if (!oExpRegEm.test(sEmail2)) {
        if (bValido) {
            mform1.email2.focus();
            bValido = false;
        }
        sErrores += "\n- El email 2 no cumple los requisitos";
        mform1.email2.classList.add("errorForm");
    } else {
        mform1.email2.classList.remove("errorForm");
    }

    // Validación de que los dos emails son iguales -----------------------------------------------------------
    console.log(sEmail1);
    console.log(sEmail2);

    if (sEmail1 != sEmail2) {
        mform1.email2.focus();
        bValido = false;
        sErrores += "\n- Los emails no coinciden";
        mform1.email2.classList.add("errorForm");
    } else {
        alert("Los emails son iguales");
        mform1.email2.classList.remove("errorForm");
    }

    // Validación nombre
    let sNombre = mform1.firstname.value.trim();
    let oExpRegNomAp = /^[A-Za-zàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð]{3,15}$/;

    if (!oExpRegNomAp.test(sNombre)) {
        if (bValido) {
            mform1.firstname.focus();
            bValido = false;
        }
        sErrores += "\n- El nombre no cumple los requisitos";
        mform1.firstname.classList.add("errorForm");
    } else {
        mform1.firstname.classList.remove("errorForm");
    }

    // Validación apellido
    let sApellido = mform1.lastname.value.trim();
    // usamos oExpRegNomAp

    if (!oExpRegNomAp.test(sApellido)) {
        if (bValido) {
            mform1.lastname.focus();
            bValido = false;
        }
        sErrores += "\n- El apellido no cumple los requisitos";
        mform1.lastname.classList.add("errorForm");
    } else {
        mform1.lastname.classList.remove("errorForm");
    }

    // Validación ciudad
    let sCiudad = mform1.city.value.trim();
    // usamos oExpRegNomAp

    if (!oExpRegNomAp.test(sCiudad)) {
        if (bValido) {
            mform1.city.focus();
            bValido = false;
        }
        sErrores += "\n- La ciudad no cumple los requisitos";
        mform1.city.classList.add("errorForm");
    } else {
        mform1.city.classList.remove("errorForm");
    }

    // Validación CP
    let iCP = mform1.cp.value.trim();
    let oExpRegCP = /^\d{5}$/;

    if (!oExpRegCP.test(iCP)) {
        if (bValido) {
            mform1.cp.focus();
            bValido = false;
        }
        sErrores += "\n- El código postal no cumple los requisitos";
        mform1.cp.classList.add("errorForm");
    } else {
        mform1.cp.classList.remove("errorForm");
    }

    // Validación seleccion país
    let sPais = mform1.country.value;

    if (sPais == "") {
        if (bValido) {
            mform1.country.focus();
            bValido = false;
        }
        sErrores += "\n- No ha seleccionado ningún país";
        mform1.country.classList.add("errorForm");
    } else {
        mform1.country.classList.remove("errorForm");
    }


    // --------------------------------------------------------------
    // COMPROBACIÓN FINAL
    if (bValido) { // Si todo OK
        mform1.submit();
    } else {
        alert(sErrores);
    }

}






