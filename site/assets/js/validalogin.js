//Rafaela
//Javascript para fazer validação do login
function validaLogin() {
  var senha = document.querySelector("#inputPassword3").value;
	//Chamando as verificações
	valida();

	return false;
}
//verifica campos em branco
function valida() {
	var senhaL = document.querySelector("#inputPassword3").value;
 	var emaiL = document.querySelector("#inputEmail3").value;

 	if((senhaL=="") || (emailL=="")){
		alert("Existem campos em branco");
 	}
}
