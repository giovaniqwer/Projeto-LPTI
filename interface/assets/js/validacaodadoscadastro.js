//Giovani
//Javascript para fazer validação dos dados digitados durante o cadastro

function verificadadoscadastro () {
	//Chamando as verificações
	validaCampo();
	verificaSenha();
	limpaCampos();
}

//Verificar dados relacionados a senha (Se há 6 caracteres/ Se as senhas conferem)
function verificaSenha (senha, confSenha) {
	if (document.getElementById("senha").value.length < 6) {
		alert("A senha deve ter pelo menos 6 caracteres");
	}else if (document.getElementById("senha").value != document.getElementById("cofirmacao_senhacadastro").value) {
		alert("As senhas digitadas não conferem!");
	}
}

//Limpa todos os campos
function limpaCampos() {
	document.getElementById("senha").value = "";
	document.getElementById("cofirmacao_senhacadastro").value;
}

//Verifica campos em branco - Rafaela
function validaCampo() {
	var nome = document.querySelector("#first_name").value;
 	var email = document.querySelector("#email").value;
	var matricula = document.querySelector("#matricula").value;
	var senha = document.querySelector("#senha").value;
	var confSenha = document.querySelector("#cofirmacao_senhacadastro").value;


 	if((nome=="") || (email=="") || (matricula=="") || (senha=="") || (confSenha=="")){
		alert("Existem campos em branco");
 	}else{
		alert("Enviado com sucesso!")
	}
}
