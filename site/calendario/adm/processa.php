		<?php
			include_once 'evento.class.php';
			include_once 'conexao.class.php';
			$camposOK=true;
			
			//Recebe o valor dos campos//
			$email = $_POST["txtEmail"];
			$nome = $_POST["txtNome"]; //post metodo de envio de dados			
			$data = $_POST["txtData"];
			$data = explode("/",$data);
	
			//Verifica nome//
			if ( $nome == "" ){
				echo "Informe o nome <br>";
				$camposOK = false;
			}
			
			//Valida data//
			if (($data[2] <= 2016) && ($data[2]>0000)){				
				if (($data[1] == 04) || ($data[1] == 06)  || ($data[1] == 09) || ($data[1] == 11)){
					if(($data[0] <= 30) && ($data[0] > 00)){	
					}else{	
						$camposOK = false;
					}
				} else if (($data[1] == 01) || ($data[1] == 03)  || ($data[1] == 05) || ($data[1] == 07) || ($data[1] == 08)|| ($data[1] == 10)|| ($data[1] == 12) ){
					if(($data[0] <= 31) && ($data[0] > 00)){	
					}else{	
						$camposOK = false;
					}
				}else if ($data[1] == 02){
					if ($data[2] % 4 ==0){
						if ($data[2] % 100 !=0){
							if ($data[0] <= 29){
							} else if ($data[2] % 400 ==0){
									if (($data[0] <= 29) && ($data[0] > 00)){						
									}else{	
										$camposOK = false;
									}
							} else if (($data[0] <= 28) && ($data[0] > 00)){
								}else{
									$camposOK = false;
								}
						}else{
							$camposOK = false;
						}
					}else{
						echo "A data está inválida <br>";
						$camposOK = false;
					}
				}
			}
			//valida email
				$TamanhoEmail = $email.length;
				$email1=false;
				$email2=false;
					for ($i=0; $i<=$TamanhoEmail; $i++) {
						if ($email[$i] == '@' ){	
							$email=document.querySelector(".txtEmail").value.split('@');
							if(($email[0].length)>=3){
								$email1 =true;
							}
							if(($email[1].length)>=4){
								$email2=true;
							}			
						}
					}
				
			//Escrever tudo
			if( $camposOK ){
				$evento = new Evento($nome,$data,$email);
				$MySQL = new MySQL;
				
				try{
					$MySQL->inserirEvento($evento->getNomeCliente(), $evento->getDataCadastro(), $evento->getEmail());
					echo "Dados gravados com sucesso <br>";
				}catch (Exception $email){
					echo "Erro ao inserir: ". $email->getMessage() . "<br>" ;
				}
			}
		?>


