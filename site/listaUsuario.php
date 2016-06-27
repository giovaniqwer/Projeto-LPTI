<?php
	require_once 'init.php';
	$PDO = db_connect();
	$sql_count = "SELECT COUNT(*) AS total FROM Usuario ORDER BY nome ASC";
	$sql = "SELECT idUsuario, nome,sobrenome,senha, email, identificacao,TipoUsuario_idTipoUsuario FROM Usuario ORDER BY nome ASC";
	$stmt_count = $PDO->prepare($sql_count);
	$stmt_count->execute();
	$total = $stmt_count->fetchColumn();
	$stmt = $PDO->prepare($sql);
	$stmt->execute();
?>

<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="alunos" >
				<!--css forum -->
				<link href="forum-calendario/assets/css/bootstrap.css" rel="stylesheet">
				<link href="forum-calendario/assets/css/font-awesome.css" rel="stylesheet">
				<link href="forum-calendario/assets/css/basic.css" rel="stylesheet">
				<link href="forum-calendario/assets/css/custom.css" rel="stylesheet">
				<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
				<!--fim css forum-->
        <link href="assets/img/favicon.png" rel="shortcut icon">
        <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery-ui.js"></script>
        <script type="text/javascript" src="assets/js/ajax.js"></script>

        <title>Divulga ICSA</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/css.css" rel="stylesheet">
		<link href="assets/cadastro/css.css" rel="stylesheet">
		<!--CSS CALENDARIO-->
		<link href="forum-calendario/assets/css/calendario.css" rel="stylesheet">
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
						<a class="navbar-brand" href="index.html"><img src="assets/img/logo.png"></a>
					</div>
					<div class="navbar-collapse collapse move-me" id="menuTopo">
						<ul class="nav navbar-nav navbar-right set-links">
							<li>
								<a href="index.html" class="active-menu-item">HOME</a>
							</li>
							<li>
								<a href="listaContato.php">MENSAGENS</a>
							</li>
              <li>
                <a href="listaUsuario.php">USUARIOS</a>
              </li>
							<li>
								<a href="#">SAIR</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
        <br>

		<!--CONTEUDO MENU-->
<div class="conteudo">
  <div class="mensagem">
    <div class="ok">
  <h1>Usuarios </h1>

        <table width="100%" border="1">
            <thead>
                <tr>
                  <th>Nome</th>
									<th>Sobrenome</th>
                  <th>E-mail</th>
                  <th>Identificacao/Matricula</th>
                  <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while($usuario = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td><?php echo $usuario ['nome'] ?></td>
                        <td><?php echo $usuario ['sobrenome'] ?></td>
                        <td><?php echo $usuario ['email'] ?></td>
												<td><?php echo $usuario ['identificacao'] ?></td>
                        <td>
                            <a href="delete-user.php?id=<?php echo $usuario ['idUsuario']?>" onclick="return confirm('Deseja realmente remover este Usuario ?') ;"> Remover</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>


    </div>
</div>
</div>
</div>
</div>
		<!--FIM DO CONTEUDO MENU-->
        <!--RODAPÉ-->
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


        <!-- COPY TEXT SECTION END-->
        <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME
        -->


        <!-- CORE JQUERY -->
        <script src="assets/js/jquery-1.11.1.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>

				<!--forum js-->
				<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
<script src="forum-calendario/assets/js/wizard/jquery.steps.js"></script>

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="forum-calendario/assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="forum-calendario/assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="forum-calendario/assets/js/custom.js"></script>
		<script src="forum-calendario/assets/js/jquery.mixitup.min.js"></script>

		<script src="forum-calendario/assets/js/wizard/modernizr-2.6.2.min.js"></script>
		<script src="forum-calendario/assets/js/wizard/jquery.cookie-1.3.1js"></script>



</body>
</html>
