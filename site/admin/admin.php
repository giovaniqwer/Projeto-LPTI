<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="alunos">
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
			<div class="navbar-collapse collapse move-me" id="menuTopo">
				<ul class="nav navbar-nav navbar-right set-links">
					<li>
						<a href="admin.html">HOME</a>
					</li>
					<li>
						<a href="listaUsuario.php">USUARIOS</a>
					</li>
					<li>
						<a href="listaContato.php">MENSAGENS</a>
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
	<!-- CARROSSEL DE FOTOS-->
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
								<a class="active-menu" href="admin.php"><i class="fa fa-dashboard "></i>Principal<br></a>
							</li>
							<li>
								<a hr ef="#"><i class="fa fa-align-justify"></i>Eventos<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>

										<a href="minicurso.php"><i class="fa fa-play-circle">&nbsp;Mini Cursos</i></a>

									</li>
									<li>
										<a href="palestra.php"><i class="fa fa-bell ">&nbsp;Palestras</i></a>
									</li>
									<li>
										<a href="entreterimento.php"><i class="fa fa-circle-o"></i>Entreterimento</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="estagio.php"><i class="fa fa-search"></i>Estágio </a>
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
								<h1 class="page-head-line">PRINCIPAL</h1>
							</div>
						</div>
						<!-- /. ROW  -->


						<!-- /. ROW  -->
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">

									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-4 ">
												<div class="alert alert-info text-center">
													<h4> Palestra</h4>
													<hr />

													<p>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
													</p>
													<hr />
													<a href="palestra.php" class="btn btn-info">Ver mais...</a>
												</div>
											</div>
											<div class="col-md-4 ">
												<div class="alert alert-danger text-center">
													<h4>Estágio</h4>
													<hr />

													<p>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
													</p>
													<hr />
													<a href="estagio.php" class="btn btn-danger">Ver mais...</a>
												</div>
											</div>
											<div class="col-md-4 ">
												<div class="alert alert-success text-center">
													<h4>Vaga em Republica</h4>
													<hr />

													<p>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
													</p>
													<hr />
													<a href="anuncio.php" class="btn btn-success">Ver mais...</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--FIM DO CONTEUDO MENU-->
					<!--RODAPÉ-->
					<!--FIM DO RODAPÉ-->
					<!-- CORE JQUERY -->
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
