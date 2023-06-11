class UsernamePassword {
  constructor(email, password, name) {
    this.email = email;
    this.password = password;
    this.name = name;
  }
}

function onClickLogin(){
   let user = new UsernamePassword("utilizador","dsasa","utilizador");
   
   if (user.name == "utilizador"){    
        if (user.password == "dsasa"){
            alert("Bem vindo "+user.name);
            windows.location.href="index.html";
        }
   }
}

function onClickRegiste(){

    window.location.href="utilizador.html"
}

function validar(){

    var name = document.forms["utilizador"]["UserName"];
    var email = document.forms["utilizador"]["Email"];
    var password = document.forms["utilizador"]["Password"];

    if (name.value == "") {
        window.alert("Por favor insere o nome.");
        name.focus();
        return false;
    }

    if (email.value == "")  {
        window.alert("Por favor insere um email valido.");
        email.focus();
        return false;
    }

    if (password.value == "") {
        window.alert("Por favor insere uma password correcta");
        password.focus();
        return false;
    
    }
    

    return true;
}