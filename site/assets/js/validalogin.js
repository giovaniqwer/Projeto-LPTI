//Rafaela e Vitor
//Javascript para fazer validação do login
function validaLogin() {
	if(validaEmBranco()){
		return true;	
	}else{
		return false;	
	}

}
//verifica campos em branco
function validaEmBranco() {
	var senhaL = document.querySelector("#inputPassword3").value;
 	var emaiL = document.querySelector("#inputEmail3").value;
	var ver = true;	
	if(emaiL==""){
		document.getElementsByName('email')[0].placeholder='Campo em branco';
		ver = false;	
	}
	if(senhaL==""){
		document.getElementsByName('senha')[0].placeholder='Campo em branco';
		ver = false;	
	}
	if(ver){
		return true;
	}else {
		return false;	
	}
}
