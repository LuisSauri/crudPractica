    function validateEmail(email) {
        var re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return re.test(email);
    }

    function validateWebsite(website) {
        var re = /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/;
        return re.test(website);
    }

    function validatePhone(phone) {
        var re = /^\d{10,12}$/;
        return re.test(phone);
    }

    function checkForm() {
        var nombre = document.getElementById("nombre").value;
        var apellido = document.getElementById("apellido").value;
        var company = document.getElementById("company").value;
        var ciudad = document.getElementById("ciudad").value;
        var pais = document.getElementById("pais").value;
        var telefono1 = document.getElementById("telefono1").value;
        var telefono1Error = document.getElementById("telefono1-error");

        if (!telefono1 || !validatePhone(telefono1)) {
            telefono1Error.style.display = "block";
            document.getElementById("telefono1").classList.add("is-invalid");
        } else {
            telefono1Error.style.display = "none";
            document.getElementById("telefono1").classList.remove("is-invalid");
        }

        var telefono2 = document.getElementById("telefono2").value;
        var telefono2Error = document.getElementById("telefono2-error");

        if (!telefono2 || !validatePhone(telefono2)) {
            telefono2Error.style.display = "block";
            document.getElementById("telefono2").classList.add("is-invalid");
        } else {
            telefono2Error.style.display = "none";
            document.getElementById("telefono2").classList.remove("is-invalid");
        }

        var email = document.getElementById("email").value;
        var emailError = document.getElementById("email-error");

        if (!email ||!validateEmail(email)) {
            emailError.style.display = "block";
            document.getElementById("email").classList.add("is-invalid");
        } else {
            emailError.style.display = "none";
            document.getElementById("email").classList.remove("is-invalid");
        }

        var website = document.getElementById("website").value;
        var websiteError = document.getElementById("website-error");

        if (!website ||!validateWebsite(website)) {
            websiteError.style.display = "block";
            document.getElementById("website").classList.add("is-invalid");
        } else {
            websiteError.style.display = "none";
            document.getElementById("website").classList.remove("is-invalid");
        }

        if (nombre && apellido && company && ciudad && pais && telefono1 && telefono2 && email && website) {
            document.getElementById("btnGuardar").disabled = false;
        } else {
            document.getElementById("btnGuardar").disabled = true;
        }
    }
