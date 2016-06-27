//Rafaela
//Javascript para fazer validação de contato
function validaContato() {
	//Chamando as verificações
	validaCampos();
	return false;
}
//verifica campos em branco
function validaCampos() {
	var nome = document.querySelector("#inputNome").value;
 	var email = document.querySelector("#inputEmail").value;
	var txt = document.querySelector("#inputTexto").value;


 	if((nome=="") || (email=="") || (txt=="")){
		alert("Existem campos em branco");
 	}
}
