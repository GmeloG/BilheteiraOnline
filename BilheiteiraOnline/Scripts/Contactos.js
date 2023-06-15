
function validar(){

    //obter nome
    var nome = document.getElementById("nome");

    //validar nome
    if (nome.value == ""){
        alert("Preencha o seu nome");
        return false;
    }
    //obter email
    var email = document.getElementById("email");

    //validar email
    if (email.value == ""){
        alert("Preencha o seu nome");
        return false;
    }
    //obter telefone
    var telefone = document.getElementById("telefone");
    //validar telefone
    if (telefone.value == ""){
        alert("Preencha o seu telefone");
        return false;
    }

    //obter mensagem
    var mensagem = document.getElementById("mensagem");
    //validar mensagem
    if (mensagem.value == ""){
        alert("Coloque a sua mensagem");
        return false;
    }

    return true;
}