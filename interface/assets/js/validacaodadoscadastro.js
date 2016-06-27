//Giovani E Rafaela
//Javascript para fazer validação dos dados digitados durante o cadastro

function verificadadoscadastro () {

//VERIFICA CAMPOS EM BRANCO
		var nome = document.querySelector("#first_name").value;
	 	var email = document.querySelector("#email").value;
		var matricula = document.querySelector("#matricula").value;
		var senha = document.querySelector("#senha").value;
		var confSenha = document.querySelector("#cofirmacao_senhacadastro").value;


	 	if((nome=="") || (email=="") || (matricula=="") || (senha=="") || (confSenha=="")){
			alert("Existem campos em branco");
			return false;
	 	}else{
			alert("Cadastro realizado com sucesso!");
		}

//VERIFICA SENHAS
	if (document.getElementById("senha").value.length < 6) {
		alert("A senha deve ter pelo menos 6 caracteres");
	}else if (document.getElementById("senha").value != document.getElementById("cofirmacao_senhacadastro").value) {
		alert("As senhas digitadas não conferem!");
	}
	//LIMPA SENHA
	document.getElementById("senha").value = "";
	document.getElementById("cofirmacao_senhacadastro").value;
}





//Verifica campos em branco - Rafaela
