<html><head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divulga ICSA</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.css" rel="stylesheet">
    <link href="../assets/css/basic.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">      
    <!--Menu topo-->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/font-awesome.css" rel="stylesheet">
    <!--GOOGLE FONTS-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
    <!-- DATEPICKER -->
	<link   rel="stylesheet" href="assets/css/jquery-ui.css">		
	<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
	<script type="text/javascript" src="assets/js/jquery.maskedinput.js"></script>
	<script type="text/javascript" src="assets/js/datepicker-pt-BR.js"></script>
	 <!--JAVASCRIPT-->
  <script type="text/javascript" src="assets/js/funcoes.js"></script>
  </head>
  <body>
	<script>
		$(document).ready(function() {
			$("#date").datepicker({
						minDate: 0, 	
						buttonImageOnly: true						
			});
			$("#time").mask("99:99");
		});
	</script>
    <div id="wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top ">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.html"><i class="fa fa-lg fa-mortar-board"></i><small><strong>DIVULGA ICSA - UNIFAL </strong></small></a>
          </div>
          <div class="navbar-collapse collapse move-me" id="menuTopo">
            <ul class="nav navbar-nav navbar-right set-links">
              <li>
                <a href="index.html" class="active-menu-item">HOME</a>
              </li>
              <li>
                <a href="links.html">LINKS</a>
              </li>
              <li>
                <a href="cadastro.html">CADASTRE-SE</a>
              </li>
              <li>
                <a href="login.html">LOGIN</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <!-- /. NAV TOP -->
      <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav" id="main-menu">
            <li>
              <a class="active-menu" href="index.html"><i class="fa fa-dashboard "></i>Principal<br></a>
            </li>
            <li>
              <a href="index.html"><i class="fa fa-align-justify"></i>Eventos<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="evento.php"><i class="fa fa-play-circle">&nbsp;Mini Cursos</i></a>
                </li>
                <li>
                  <a href="evento.php"><i class="fa fa-bell ">&nbsp;Palestras</i></a>
                </li>
                <li>
                  <a href="evento.php"><i class="fa fa-circle-o"></i>Entreterimento</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-yelp "></i>Estágios<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="#"><i class="fa fa-calculator">&nbsp; Economia</i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-bank">&nbsp; Administração</i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-bar-chart-o"></i>Ciencias Atuariais</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-th"></i>Todos</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-search"></i>Anuncio </a>
            </li>
            <li>
              <a href="#"><i class="fa fa-search"></i>Pesquisa e Extensão </a>
            </li>
            <li>
              <a href="#"><i class="fa fa-globe"></i>Iniciação Cientifica</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-book"></i>Monitorias</a>
            </li>
            <li>
              <a href="#s"><i class="fa -retro -picture-o fa-photo"></i>Galeria</a>
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
                        <h1 class="page-head-line">Calendário</h1>
                    </div>
                </div>
       
         
              <!-- /. ROW  -->
                 <div id="conteudo" class="row">
                    <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
	<form method="post" action="add.php" name="formCadastro" enctype="multipart/form-data"  onsubmit="return validaForm()">
		<div class="col-md-6">
			<div class="alert alert-info">
				<div class="form-group" >
					<strong>CADASTRO DE EVENTOS</strong><br>
						<label></label>
							<input type="text" class="form-control" id="" name="txtTema" placeholder="Tema">
							<label></label>
							<input type="text" class="form-control" name="txtPalestrante" placeholder="Palestrante">
							<label></label>
							<input type="text" class="form-control" id="date" name="txtData" placeholder="Data" readonly>
							<label></label>
							<input type="text" class="form-control" name="txtLocal" placeholder="Local">
							<label></label>
							<input type="text" class="form-control" id="time" name="horario" placeholder="Horario">
							<label></label>
							<input type="text" class="form-control" name="txtDescricao" placeholder="Descrição">
							<label></label>
							<label>Classificação</label>							
							<select name="txtClassificacao"><!--Proporciona uma lista-->
								<option  value="">Selecione a Classificação</option>	
								<option value="Entretenimento">Entretenimento</option>
								<option value="Ensino">Ensino</option>
								<option value="Extensão">Extensão</option>
								<option value="Pesquisa">Pesquisa</option>
								<option value="Outros">Outros</option>
						</select>
							<label></label>
							<br>
							<label></label>												
							<br>
							<input type="submit" class="btn btn-success" href="add.php" value="Cadastrar"></input>
							<input type="reset" class="btn btn-success" name="bntLimpar" value="Limpar"></input>
							<input type="submit" class="btn btn-danger" href="evento.php" value="Cancelar"></input>			
				</div>
			</div>
		</div>
	</form>
</div>
</div>
					  </div>
					</div>
                    
				</div>
    
    <!-- RODAPÉ -->
    <div id="footer-sec">© 2016 Supremacia UNIFAL| Todos os direitos reservados.
      <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
  

</body></html>
