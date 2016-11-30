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
    <link   rel="stylesheet"       href="assets/fullcalendar-2.9.1/fullcalendar.css">
    <script type="text/javascript" src="assets/fullcalendar-2.9.1/lib/jquery.min.js"></script>
    <script type="text/javascript" src="assets/fullcalendar-2.9.1/lib/moment.min.js"></script>
    <script type="text/javascript" src="assets/fullcalendar-2.9.1/fullcalendar.min.js"></script>
    <script type="text/javascript" src="assets/fullcalendar-2.9.1/lang/pt-br.js"></script>
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
                  
       
         
             
					<!-- /. SECTION -->
              <section class="container">
					<div id='calendarioADM'></div>
					</section>            
                </div>
                </div>
               <!-- /. ROW  -->
                 <div id="conteudo" class="row">
                    <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-body">
							<div class="row">
								<div class="col-md-9 col-xs-6">
								</div>
								<div class="col-md-3 col-xs-6">
									<a style="float:right" href="form-add.php"><div class="fa fa-plus-square-o fa-3x"></div></a>	
									<br><br>
								</div>
							</div>
                            <div class="row">
								
								<div class="col-md-3 col-xs-6">
									<div class="alert alert-danger text-center">
										<h4> Entretenimento </h4> 
										<hr/>
										<i class="fa fa-futbol-o fa-4x"></i>
									</div>
								</div>
								
								<div class="col-md-3 col-xs-6">
									<div class="alert alert-info text-center">
										<h4> Ensino </h4> 
										<hr/>
										<i class="fa fa-book fa-4x"></i>
									</div>
								</div>
								
                                <div class="col-md-3 col-xs-6">
									<div class="alert alert-success text-center">
										<h4> Extensão </h4> 
										<hr/>
										<i class="glyphicon glyphicon-globe fa-4x"></i>
									</div>
								</div>
								
                                <div class="col-md-3 col-xs-6">
									<div class="alert alert-warning text-center">
										<h4> Pesquisa </h4> 
										<hr/>                          
										<i class="fa fa-desktop fa-4x"></i>
									</div>
								</div>        													
							</div>
							<div style="float:right">
							<br>
							<a type="button" href="evento.php">Ver Eventos Cadastrados</a>
							<br>
						</div>
						</div>
					  </div>
					</div>
				</div>				</div>
				</div>

    
    <!-- RODAPÉ -->
   
    <div id="footer-sec">© 2016 Supremacia UNIFAL| Todos os direitos reservados.
      <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    
    <!-- MODAL -->
			<div class="modal fade" id="calendario" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title"></h4>
						</div>
						<div style="padding-left: 10px;">
						<div class="modal-bodyP">
						</div>
						<div class="modal-bodyH">
						</div>
						<div class="modal-bodyL">
						</div>
						<div class="modal-bodyC">
						</div>
						<div class="modal-bodyD">
						</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>
				</div>
		</div>

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script type="text/javascript" src="../assets/js/ajaxc.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
  

</body></html>
