<?php
    require 'init.php';
?>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="alunos" >
        <link href="assets/img/favicon.png" rel="shortcut icon">
        <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery-ui.js"></script>
        <script type="text/javascript" src="assets/js/ajax.js"></script>
        <script type="text/javascript" src="assets/js/validacaodadoscadastro.js"></script>
        <title>Contato</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
				<link href="assets/css/css.css" rel="stylesheet">
				<link href="assets/css/css_contato.css" rel="stylesheet">


    </head>
<body>

<div class="conteudo">
	<div class="ok">
	<body data-spy="scroll">
		<div id="titulo">
			<h3>Contato</h3>
		</div>
		<div class="container">
			<div class="row">
				<div class=" text-center">
					<div class="panel panel-default text-center" id="cadastro">
						<div class="panel-heading">
							<h3 class="panel-title text-center">Entre em contato conosco!</h3>
						</div>
						<div class="panel-body">
								<div class="row">
									<div class="col-md-6">
										<br><br><h5><b>LOCALIZAÇÃO</b></h5>
                       								<h5>Avenida Celina Ferreira Ottoni, 4000,</h5>
                        							<h5>Padre Vitor</h5>
                        							<h5>Varginha-MG.</h5><br>
                        							<h5><b>Email:</b></h5><i>direcao.varginha@unifal-mg.edu.br</i></h5>
                       								<h5><br><b>Telefone:</b></h5><i>35 3219-8720</i><br>
									</div>
									<div class="col-md-6">
										<div class="alert alert-info">
											<strong>FALE CONOSCO</strong><br>
												<form name="formulario" id="forms" action="add.php" method="post" onsubmit="return validaContato()">
													<label></label>
													<input type="text" id="inputNome" class="form-control" placeholder="Nome" name="txtNome">
													<label></label>
													<input type="text" id="inputEmail" class="form-control" placeholder="Email" name="txtEmail">
													<label></label>
													<textarea rows="5" id="inputTexto" class="form-control" placeholder="Diga-nos o que deseja divulgar" name="txtComentario"></textarea><br>
													<input id="btnEnviar" type="submit" value="Enviar"/>
												</form>
										</div>
									</div>
									<font face="Open Sans" id="erro1">Campos devem ser preenchidos!</font>
									<font face="Open Sans" id="certo">Obrigado pelo seu feedback!</font>
									<script type="text/javascript">
  										$("#erro1").hide();
    									$("#certo").hide();
    								</script>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</div>

</body>
</html>
