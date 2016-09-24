//Giovani E Rafaela
//Javascript para fazer validação dos dados digitados durante o cadastro



function verificadadoscadastro() {

//VERIFICA CAMPOS EM BRANCO
    var nome = document.querySelector("#first_name").value;
    var email = document.querySelector("#email").value;
    var matricula = document.querySelector("#matricula").value;
    var senha = document.querySelector("#senha").value;
    var confSenha = document.querySelector("#cofirmacao_senhacadastro").value;
    var teste = false;

    if ((nome == "") || (email == "") || (matricula == "") || (senha == "") || (confSenha == "")) {
        alert("Existem campos em branco");
        return false;
    } else {
        teste = true;
    }

//VERIFICA SENHAS
    if (document.getElementById("senha").value.length < 6) {
        alert("A senha deve ter pelo menos 6 caracteres");
        return false;
    } else if (document.getElementById("senha").value != document.getElementById("cofirmacao_senhacadastro").value) {
        alert("As senhas digitadas não conferem!");
        return false;
    } else {
        teste = true;
    }
    //LIMPA SENHA
    document.getElementById("senha").value = "";
    document.getElementById("cofirmacao_senhacadastro").value;
}


function validaPost() {
    var post = document.querySelector("#pt").value;
    var categoria = document.querySelector("#catg").value;
    var tag = document.querySelector("#tag").value;
    var tPost = false;

    if ((post == "") || (categoria == "") || (tag == "")) {
        alert("Campo em Branco");
        return false;
    } else {
        tPost = true;
    }
}

function hideandshow(id) {
    if (document.getElementById(id).style.display == 'inline') {
        document.getElementById(id).style.display = 'none';
    } else {
        document.getElementById(id).style.display = 'inline';
    }
}

