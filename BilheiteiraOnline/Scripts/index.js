class UsernamePassword {
    constructor(email, password, name) {
        this.email = email;
        this.password = password;
        this.name = name;
    }
}

function onClickLogin(email,password) {
    let user = new UsernamePassword("utilizador", "dsasa", "utilizador");
    window.location.href="http://localhost/2parte/BilheiteiraOnline/index.html";

}

function onClickRegiste() {

    window.location.href = "utilizador.html";
}

function validar() {

    var name = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (name.trim() === "") {

        window.alert("Por favor insere o nome.");
        return false;
    }

    if (name.length < 5) {

        window.alert("O nome deve ter pelo menos 5 caracteres.");
        return false;
    }

    if (email.trim() === "") {
        
        window.alert("Por favor insere um email valido.");
        return false;
    }

    if ((password == "") || (password.length < 6)) {

        alert("Por favor, preencha o campo senha.");
        return false;
    }

    return true;


}

function validarLogin() {

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (email.trim() === "") {
        
        window.alert("Por favor insere um email valido.");
        return false;
    }

    if ((password == "") || (password.length < 6)) {

        alert("Por favor, preencha o campo senha.");
        return false;
    }

    return true;

}