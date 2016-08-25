<?php
	session_start();
	if(empty($_SESSION["emailID"])|| empty($_SESSION["emailNome"])|| empty($_SESSION["emailTipo"])) {
	header("Location:../login.php");
	}
?>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="alunos" >
	<!--css forum -->
	<link href="../forum-calendario/assets/css/bootstrap.css" rel="stylesheet">
	<link href="../forum-calendario/assets/css/font-awesome.css" rel="stylesheet">
	<link href="../forum-calendario/assets/css/basic.css" rel="stylesheet">
	<link href="../forum-calendario/assets/css/custom.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	<!--fim css forum-->
	<link href="../assets/img/favicon.png" rel="shortcut icon">
	<script type="text/javascript" src="../assets/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-ui.js"></script>
	<script type="text/javascript" src="../assets/js/ajax.js"></script>

	<title>Divulga ICSA</title>
	<link href="../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../assets/css/font-awesome.css" rel="stylesheet">
	<link href="../assets/css/style.css" rel="stylesheet">
	<link href="../assets/css/css.css" rel="stylesheet">
	<link href="css/estilo.css" rel="stylesheet">
	<!--SCRIPT VALIDACAO-->
	<script type="text/javascript" src="assets/js/validacaodadoscadastro.js"></script>
	<script type="text/javascript" src="assets/js/validacaodocontato.js"></script>
	<script type="text/javascript" src="assets/js/validalogin.js"></script>


</head>

<body>
	<!--TOPO DO SITE-->
	<div class="navbar navbar-inverse navbar-fixed-top ">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="../assets/img/logo.png"></a>
			</div>
			<div class="navbar-collapse collapse move-me" >
				<ul class="nav navbar-nav navbar-right set-links">
					<li>
						<a href="inicio.php">INICIO</a>
					</li>
					<li>
						<a href="listaUsuario.php">USUARIOS</a>
					</li>
					<li>
						<a href="listaContato.php">MENSAGENS</a>
					</li>
					<li>
                   <a href="#"><?php echo $_SESSION["emailNome"] ?></a>
               </li>
					<li>
						<form action="../logout.php" role="form" method="post" name="formLogin">
							<button type="submit" class="active btn btn-block btn-info btn-lg">Sair
									<i class="fa fa-fw fa-lg fa-sign-out"></i>
							</button>
						</form>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<br>
	<div class="conteudo">
		<div id="wrapper">
			<br>

			<!-- /. NAV TOP -->
			<br>
			<div class="conteudo">

		<nav class="navbar-default navbar-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav" id="main-menu">
					<li>
						<a  href="admin.php"><i class="fa fa-dashboard "></i>Principal<br></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-align-justify"></i>Eventos<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>

								<a href="minicurso.php"><i class="fa fa-play-circle">&nbsp;Mini Cursos</i></a>

							</li>
							<li>
								<a  href="palestra.php"><i class="fa fa-bell ">&nbsp;Palestras</i></a>
							</li>
							<li>
								<a href="entreterimento.php"><i class="fa fa-circle-o"></i>Entreterimento</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="active-menu" href="estagio.php"><i class="fa fa-search"></i>Estágio </a>
					</li>
					<li>
						<a href="anuncio.php"><i class="fa fa-search"></i>Anuncio </a>
					</li>
					<li>
						<a href="pesqext.php"><i class="fa fa-search"></i>Pesquisa e Extensão </a>
					</li>
					<li>
						<a href="inicCient.php"><i class="fa fa-globe"></i>Iniciação Cientifica</a>
					</li>
					<li>
						<a href="monitorias.php"><i class="fa fa-book"></i>Monitorias</a>
					</li>

					<li>
						<a href="#"><i class="fa fa-align-justify"></i>GRADE CURRICULAR</a>
					</li>
				</ul>
			</div>
		</nav>
		<div id="page-wrapper">
			<div id="page-inner">
				<div class="row">
					<div class="col-md-12">
						<h1 class="page-head-line">Estágio</h1>
						<center>
							<div id="divBusca">
								<img src="img/search3.png" alt="Buscar..." />
								<input type="text" id="txtBusca" placeholder="Buscar..." />
								<button id="btnBusca">Buscar</button>
							</div>
						</center>
					</div>
				</div><br>
				<!-- /. ROW  -->
				<div class="row">
					<div class="col-md-4 col-sm-4" id="largura">
						<div class="panel panel-danger">
							<div class="panel-heading">
								<div class="alert-link">
									Nome Usuário Postagem&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#" class="btn btn-info">Excluir Postagem</a>
								</div>
							</div>
							<div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
							</div>
							<div class="panel-footer">
								<div class="form-group">
									<label>Comentario</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>
								<button type="submit" class="btn btn-info">Enviar Comentario </button>
								<br>
								<br>
								<div class="alert alert-info">
									<div class="alert-link">
										Nome Usuário Comentario
									</div>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									<a href="#" class="btn btn-info">Excluir</a>
								</div>

							</div>
						</div>
					</div>
					<div class="col-md-6" id="boxlateral">
							<div class="panel panel-info">
									<div class="panel-heading">
											<i class="fa fa-bell fa-fw"></i>Menu
									</div>

									<div class="panel-body">
											<div class="list-group">

													<a href="#" class="list-group-item">
															<i class="fa fa-twitter fa-fw"></i>Adicionar Postagem
															<span class="pull-right text-muted small"><em></em>
													</span>
													</a>
											</div>

											<!-- /.list-group -->

				</div>
				<div class="panel panel-info">
						<div class="panel-heading">
								<i class="fa fa-bell fa-fw"></i>Tags
						</div>

						<div class="panel-body">
								<div class="list-group">

										<a href="#" class="list-group-item">
												<i class="fa fa-twitter fa-fw"></i>Tag #01
												<span class="pull-right text-muted small"><em></em>
										</span>
										</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
								<section id="footer-sec">
												<div class="container">
														<div class="row">
																<div class="col-md-4">
																		<h4>UNIFAL - GRUPO PET</h4>
																		<p style="padding-right:50px;"> PET BICE Instituto de Ciências Sociais Aplicadas ICSA
																				– UNIFAL/MG Rede Social</p>
																</div>
																<div class="col-md-4">
																		<h4>Informações</h4>Avenida Celina Ferreira Ottoni, 4000, Bloco B, 1º Andar,
																		Sala B-106A,&nbsp;Padre Vítor,&nbsp;Varginha/MG – Brasil – Tel.: (35) 3219-8640
																		<strong>Email:</strong>direcao.varginha@unifal-mg.edu.br
																</div>
																<div class="col-md-4">
																		<h4>SOCIAL LINKS</h4>
																		<div class="social-links">
																				<a href="#"> <i class="fa fa-facebook fa-2x"></i></a>
																				<a href="#"> <i class="fa fa-twitter fa-2x"></i></a>
																		</div>
																</div>
														</div>
														<br>© 2016 Supremacia UNIFAL| Todos os direitos reservados.</div>
										</section>
										<!--FIM DO RODAPÉ-->

										<script src="../assets/js/jquery-1.11.1.js"></script>
										<!-- BOOTSTRAP SCRIPTS -->
										<script src="../assets/js/bootstrap.js"></script>
										<!-- CUSTOM SCRIPTS -->
										<script src="../assets/js/custom.js"></script>

										<!--forum js-->
										<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
										<!-- JQUERY SCRIPTS -->
										<script src="../forum-calendario/assets/js/wizard/jquery.steps.js"></script>

										<!-- BOOTSTRAP SCRIPTS -->
										<script src="../forum-calendario/assets/js/bootstrap.js"></script>
										<!-- METISMENU SCRIPTS -->
										<script src="../forum-calendario/assets/js/jquery.metisMenu.js"></script>
										<!-- CUSTOM SCRIPTS -->
										<script src="../forum-calendario/assets/js/custom.js"></script>
										<script src="../forum-calendario/assets/js/jquery.mixitup.min.js"></script>

										<script src="../forum-calendario/assets/js/wizard/modernizr-2.6.2.min.js"></script>
										<script src="../forum-calendario/assets/js/wizard/jquery.cookie-1.3.1js"></script>
										<script src="../assets/js/jquery-1.10.2.js"></script>
										<!-- BOOTSTRAP SCRIPTS -->
										<script src="../assets/js/bootstrap.js"></script>
										<!-- METISMENU SCRIPTS -->
										<script src="../assets/js/jquery.metisMenu.js"></script>
										<!-- CUSTOM SCRIPTS -->
										<script src="../assets/js/custom.js"></script>


							</body>
							</html>
