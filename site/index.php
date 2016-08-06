
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Vitor" >
	<!--css forum -->
	<link href="../forum-calendario/assets/css/bootstrap.css" rel="stylesheet">
	<link href="../forum-calendario/assets/css/font-awesome.css" rel="stylesheet">
	<link href="../forum-calendario/assets/css/basic.css" rel="stylesheet">
	<link href="../forum-calendario/assets/css/custom.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	<!--fim css forum-->
	<link href="../assets/img/favicon.png" rel="shortcut icon">
	<script type="../text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
	<script type="../text/javascript" src="assets/js/jquery-ui.js"></script>
	<script type="../text/javascript" src="assets/js/ajax.js"></script>

	<title>Divulga ICSA</title>
	<link href="../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../assets/css/font-awesome.css" rel="stylesheet">
	<link href="../assets/css/style.css" rel="stylesheet">
	<link href="../assets/css/css.css" rel="stylesheet">
	<!--CSS CALENDARIO-->
	<link href="../forum-calendario/assets/css/calendario.css" rel="stylesheet">
	<!--SCRIPT VALIDACAO-->
	<script type="../text/javascript" src="assets/js/validacaodadoscadastro.js"></script>
	<script type="../text/javascript" src="assets/js/validacaodocontato.js"></script>
	<script type="../text/javascript" src="assets/js/validalogin.js"></script>


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
				<a class="navbar-brand" href="index.html"><img src="../assets/img/logo.png"></a>
			</div>
			<div class="navbar-collapse collapse move-me" id="menuTopo">
				<ul class="nav navbar-nav navbar-right set-links">
					<li>
						<a href="#" class="active-menu-item">HOME</a>
					</li>
					<li>
						<a href="#">LINKS</a>
					</li>
					<li>
						<?php	
							echo "{$_SERVER['PHP_AUTH_USER']}";
							
						?>
						<a href="logout.php">LOGOUT</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<br>
	<!-- CARROSSEL DE FOTOS-->
	<div class="conteudo">

		<br>
		<div class="carousel slide" id="fullcarousel-example" data-interval="7000" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item">
					<center>
						<img src="../assets/img/banner2.jpg" style="height:220px;">
					</center>
					<div class="../carousel-caption"></div>
				</div>
				<div class="item active">
					<center>
						<img src="../assets/img/banner1.jpg" style="height:220px;">
					</center>
					<div class="carousel-caption"></div>
				</div>
			</div>
			<a class="left carousel-control" href="#fullcarousel-example" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
			<a class="right carousel-control" href="#fullcarousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
		</div>

		<!--FIM DO CARROSSEL DE FOTOS-->
		<!--CONTEUDO MENU-->

		<section id="features-sec">
			<div class="container">
				<div class="row text-center">
					<div class="icones">
						<div id="menuTopo">
							<div class="col-md-3">
								<a href="../about.html"><i class="color-2 fa fa-3x icon-custom-2 fa-info"></i></a>
								<h4>SOBRE</h4>
								<p>Saiba mais sobre nós!</p>
							</div>
							<div class="col-md-3">
								<a href="../forum-calendario/forum.html"><i class="fa s-o fa-3x icon-custom-2 color-2 fa-comments"></i></a>
								<h4>Fórum</h4>
								<p>Mantenha-se informado de tudo que acontece em sua instituição</p>
							</div>
							<div class="col-md-3">
								<a href="../forum-calendario/cal.html"> <i class="fa fa-3x icon-custom-2 color-2 fa-calendar-o"></i></a>
								<h4>Calendario</h4>
								<p>Eventos e Noticias</p>

							</div>
						</div>
					</div>
				</div>
		</section>
		</div>
	</div>
	<!--FIM DO CONTEUDO MENU-->
	<!--RODAPÉ-->
	<section id="footer-sec">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h4>UNIFAL - GRUPO PET</h4>
					<p style="padding-right:50px;"> PET BICE Instituto de Ciências Sociais Aplicadas ICSA – UNIFAL/MG Rede Social</p>
				</div>
				<div class="col-md-4">
					<h4>Informações</h4>Avenida Celina Ferreira Ottoni, 4000, Bloco B, 1º Andar, Sala B-106A,&nbsp;Padre Vítor,&nbsp;Varginha/MG – Brasil – Tel.: (35) 3219-8640
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


	<!-- COPY TEXT SECTION END-->
	<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME
        -->


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



</body>

</html>
