

function checkLogin(form) {

    event.preventDefault();

    if ((form.inputEmail.value == "a@a") && (form.inputPassword.value == "b")) {

        setCookie("nome", "Piera", 1);

        setCookie("surname", "La Zozza", 1);

        setCookie("nickname", "Elenella", 1);

        window.location = "../pages/dashboard.html";

    } else {

        alert("retry")
        location.reload();
    }
}


function setCookie(nome, valore, ggScadenza, path) {
    if (path == undefined) {
        path = "/";
    }
    var d = new Date();
    d.setTime(d.getTime() + (ggScadenza * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = nome + "=" + valore + "; " + expires + "; path=" + path;
}

function getCookie(nome) {
    var name = nome + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ')
            c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}