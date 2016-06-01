//Giovani
//Javascript para fazer validação dos dados digitados durante o cadastro

function verificadadoscadastro () {
	var senha = document.getElementById("senha").value;
	verificasenha(senha);
}

//Verificar dados relacionados a senha
function verificasenha (senha) {
	if (senha.length < 6) {
		alert("A senha deve ter pelo menos 6 caracteres");
	}
}
