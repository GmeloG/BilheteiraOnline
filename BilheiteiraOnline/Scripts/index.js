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
function hideLogin(){



}
 