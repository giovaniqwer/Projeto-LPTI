<?php
session_start();
if (empty($_SESSION["emailID"]) || empty($_SESSION["emailNome"]) || empty($_SESSION["emailTipo"])) {
    header("Location:../login.php");
} else if ($_SESSION["emailTipo"] != 1) {
    header("Location:../negado.html");
}

?>
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
    <!--FullCalendar-->
     <link href="../../assets/css/bootstrap.css" rel="stylesheet">
        <link href="../../assets/css/font-awesome.css" rel="stylesheet">
        <link href="../../assets/css/style.css" rel="stylesheet">
        <link href="../../assets/css/css.css" rel="stylesheet">
    <link href="../assets/fullcalendar-2.9.1/fullcalendar.css" rel="stylesheet">
    <script type="text/javascript" src="../assets/fullcalendar-2.9.1/lib/jquery.min.js"></script>
    <script type="text/javascript"  src="../assets/fullcalendar-2.9.1/lib/moment.min.js"></script>
    <script type="text/javascript" src="../assets/fullcalendar-2.9.1/fullcalendar.min.js"></script>
    <script type="text/javascript" src="../assets/fullcalendar-2.9.1/lang/pt-br.js"></script>
    <!--JAVASCRIPT-->
    <script  type="text/javascript"src="assets/js/AJAX.js"></script>
  </head>
  <body>
   <div class="navbar navbar-inverse navbar-fixed-top ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="../../assets/img/logo.png"></a>
                </div>
                <div class="navbar-collapse collapse move-me">
                    <ul class="nav navbar-nav navbar-right set-links">
                        <li>
                            <a href="../../admin/inicio.php">INÍCIO</a>
                        </li>
                        <li>
                            <a href="../../admin/listaUsuario.php">USUÁRIOS</a>
                        </li>
                        <li>
                            <a href="../../admin/listaContato.php">MENSAGENS</a>
                        </li>
                        <li>
                            <a href="../../admin/edit-user.php">
                                <?php echo $_SESSION["emailNome"] ?>
                            </a>
                        </li>
                        <li>
                            <form action="../../logout.php" role="form" method="post" name="formLogin">
                                <button type="submit" class="active btn btn-block btn-primary btn-lg">Sair
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

                <!-- /. MENU LATERAL -->
                <br>
                <div class="conteudo">

                    <nav class="navbar-default navbar-side" role="navigation">
                        <div class="sidebar-collapse">
                            <ul class="nav" id="main-menu">
                                <li>
                                    <a class="active-menu" href="../../admin/admin.php"><i class="fa fa-dashboard "></i>Principal<br></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-bell"></i>Eventos<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>

                                            <a href="../../admin/minicurso.php"><i class="fa fa-graduation-cap">&nbsp;Mini Cursos</i></a>

                                        </li>
                                        <li>
                                            <a href="../../admin/palestra.php"><i class="fa fa-cube">&nbsp;Palestras</i></a>
                                        </li>
                                        <li>
                                            <a href="../../admin/entretenimento.php"><i class="fa fa-smile-o"></i>Entretenimento</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a  href="../../admin/estagio.php"><i class="fa fa-briefcase "></i>Estágio </a>
                                </li>
                                <li>
                                    <a href="../../admin/anuncio.php"><i class="fa fa-bullhorn"></i>Anúncio </a>
                                </li>
                                <li>
                                    <a href="../../admin/pesqext.php"><i class="fa fa-search"></i>Pesquisa e Extensão </a>
                                </li>
                                <li>
                                    <a href="../../admin/inicCient.php"><i class="fa fa-flask"></i>Iniciação Cientifica</a>
                                </li>
                                <li>
                                    <a href="../../admin/monitorias.php"><i class="fa fa-book"></i>Monitorias</a>
                                </li>
                                <li>
                                    <a href="../../admin/outros.php"><i class="fa fa-archive"></i>Outros</a>
                                </li>
                                <li>
                                    <a href="../../admin/disciplinas.php"><i class="fa fa-align-justify"></i>Grade Curricular</a>
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
<?php
	require 'init.php';
    // pega o ID da URL
	$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
	// valida o ID
 	if (empty ($id))
{
	echo "ID para alteração não definido";
 	exit;
}
 	// busca os dados do usuário a ser editado
 	$PDO = db_connect();
 	$sql = "SELECT data, local, palestrante, horario, tema, descricao, classificacao FROM Evento WHERE idEvento = :idEvento";
	$stmt = $PDO->prepare($sql);
 	$stmt->bindParam(':idEvento', $id, PDO::PARAM_INT);
 	$stmt->execute();
 	$evento = $stmt->fetch(PDO::FETCH_ASSOC);
 	/* se o método fetch () não retornar um array
 	significa que o ID não corresponde a um usuário válido */
 	if(!is_array($evento))
 	{
 		echo "Nenhum Evento encontrado";
 		exit;
 	}
 	dateConvert($evento['data']);
 ?>

 	<form method = "post" name="formAltera" action ="edit.php" enctype="multipart/form-data">
 	<div class="col-md-6">
			<div class="alert alert-info">
				<div class="form-group" >
					<strong>EDIÇÃO</strong><br>
						<label></label>
							<input type="text" class="form-control" name="txtTema" value="<?php echo $evento['tema']?>">
							<label></label>
							<input type="text" class="form-control" name="txtPalestrante" value="<?php echo $evento['palestrante']?>">
							<label></label>
							<input type="text" class="form-control" name="txtData" value="<?php echo dateConvert($evento['data'])?>">
							<label></label>
							<input type="text" class="form-control" name="txtLocal" value="<?php echo $evento['local']?>">
							<label></label>
							<input type="text" class="form-control" name="horario" value="<?php echo $evento['horario']?>">
							<label></label>
							<input type="text" class="form-control" name="txtDescricao" value="<?php echo $evento['descricao']?>">
							<label></label>
							<label>Classificação</label>							
							<select name="txtClassificacao"><!--Proporciona uma lista-->
								<option  value="Não definido">Selecione a Classificação</option>	
								<option value="1">Entretenimento</option>
								<option value="2">Ensino</option>
								<option value="3">Extensão</option>
								<option value="4">Pesquisa</option>
								<option value="5">Outros</option>
							</select>
							<label></label>
							<br>
							<label></label>
							<br>
							<input type="hidden" name="id" value="<?php echo $id ?>">
							<input type="submit" class="btn btn-success" href="edit.php" value="Alterar"></input> 
							<input type="reset" class="btn btn-success" name="btnLimpar" value="Limpar"></input>
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
                   				</div>
 
				</div>
    
    <!-- RODAPÉ -->
    <div id="footer-sec">© 2016 Supremacia UNIFAL| Todos os direitos reservados.
      <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
    <script  type="text/javascript"src="../data.js"></script>
    <script type="text/javascript" src="../assets/js/ajaxc.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
  

</body></html>


