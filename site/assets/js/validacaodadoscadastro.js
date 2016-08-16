//Giovani E Rafaela
//Javascript para fazer validação dos dados digitados durante o cadastro

function verificadadoscadastro () {

//VERIFICA CAMPOS EM BRANCO
		var nome = document.querySelector("#first_name").value;
	 	var email = document.querySelector("#email").value;
		var matricula = document.querySelector("#matricula").value;
		var senha = document.querySelector("#senha").value;
		var confSenha = document.querySelector("#cofirmacao_senhacadastro").value;
		var teste = false;

	 	if((nome=="") || (email=="") || (matricula=="") || (senha=="") || (confSenha=="")){
			alert("Existem campos em branco");
			return false;
	 	}else{
			teste = true;
		}

//VERIFICA SENHAS
	if (document.getElementById("senha").value.length < 6) {
		alert("A senha deve ter pelo menos 6 caracteres");
		return false;
	}else if (document.getElementById("senha").value != document.getElementById("cofirmacao_senhacadastro").value) {
		alert("As senhas digitadas não conferem!");
		return false;
	}else{
	teste = true;
	}
	//LIMPA SENHA
	document.getElementById("senha").value = "";
	document.getElementById("cofirmacao_senhacadastro").value;
}





//Verifica campos em branco - Rafaela
