<?php
session_start();
if (empty($_SESSION["emailID"]) || empty($_SESSION["emailNome"]) || empty($_SESSION["emailTipo"])) {
    header("Location:../login.php");
} else if ($_SESSION["emailTipo"] != 1) {
    header("Location:../negado.html");
}
require_once '../init.php';
include_once '../sql.php';
include_once '../Disciplina/p1.php';
include_once '../Disciplina/p2.php';
include_once '../Disciplina/p3.php';
include_once '../Disciplina/p4.php';
include_once '../Disciplina/p5.php';
include_once '../Disciplina/p6.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="alunos" >
<!-- BOOTSTRAP STYLES-->
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<!-- FONTAWESOME STYLES-->
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<!--WIZARD STYLES-->
<link href="assets/css/wizard/normalize.css" rel="stylesheet" />
<link href="assets/css/wizard/wizardMain.css" rel="stylesheet" />
<link href="assets/css/wizard/jquery.steps.css" rel="stylesheet" />
<!--CUSTOM BASIC STYLES-->
<link href="assets/css/basic.css" rel="stylesheet" />
<!--CUSTOM MAIN STYLES-->
<link href="assets/css/custom.css" rel="stylesheet" />
<!-- GOOGLE FONTS-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

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
<script type="text/javascript" src="../assets/js/validacaodadoscadastro.js"></script>
<script type="text/javascript" src="../assets/js/validacaodocontato.js"></script>
<script type="text/javascript" src="../assets/js/validalogin.js"></script>
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
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right set-links">
                    <li>
                        <a href="inicio.php">INÍCIO</a>
                    </li>
                    <li>
                        <a href="listaUsuario.php">USUÁRIOS</a>
                    </li>
                    <li>
                        <a href="listaContato.php">MENSAGENS</a>
                    </li>

                    <li>
                        <a href="edit-user.php">
                            <?php echo $_SESSION["emailNome"] ?>
                        </a>
                    </li>

                    <li>
                        <form action="../logout.php" role="form" method="post" name="formLogin">
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
        </nav>
        <div class="conteudo">
                <br>
                    <!-- /. MENU LATERAL -->


                            <!-- /. NAV SIDE  -->
                                <div id="page-inner">
                                    <div class="row">
                                        <div class="col-md-12">



                                        </div>
                                    </div>
                                    <div class="btn_disciplina">
                                        <a class="btn btn-primary" href="../Disciplina/add-disciplina-page.php">Adicionar Disiciplina</a>
                                        <a id="gerenciar" class="btn btn-primary" href="edit-materia.php" name="gerenciar" >Gerenciar </a>

                                    </div>
                                    <br />
                                    <br />

                                    <!-- /. ROW  -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" style="height: 100%">
                                                    Grade Curricular<br />

                                                </div>
                                                <div class="panel-body">
                                                    <div id="wizard">
                                                        <h2>Primeiro Periodo</h2>
                                                        <section  id="caixa-materia" style="overflow: auto">
                                                            <?php
                                                            $stmt_p1 = sqlp1();
                                                            while ($materia = $stmt_p1->fetch(PDO::FETCH_ASSOC)):
                                                                ?>
                                                                <div class="box-materia">
                                                                    <div class="alert alert-info">
                                                                        <strong><?php echo $materia ['nome']; ?><br /></strong>
                                                                        <strong>Créditos:</strong> <?php echo $materia ['creditos']; ?><br />
                                                                        <strong>Tipo: </strong><?php echo $materia ['tipo']; ?><br />                              
                                                                        <a href="download.php?name=<?php echo $materia['nomeEmenta'];?>">Baixe a Ementa</a><br />


                                                                    </div>
                                                                </div>
                                                                <br /><br /><br /><br /><br />
                                                            <?php endwhile; ?>


                                                        </section>

                                                        <h2>Segundo Periodo</h2>
                                                         <section  id="caixa-materia" style="overflow: auto">
                                                            <?php
                                                            $stmt_p2 = sqlp2();
                                                            while ($materia = $stmt_p2->fetch(PDO::FETCH_ASSOC)):
                                                                ?>
                                                                <div class="box-materia">
                                                                    <div class="alert alert-info">
                                                                        <strong><?php echo $materia ['nome']; ?><br /></strong>
                                                                        <strong>Créditos:</strong> <?php echo $materia ['creditos']; ?><br />
                                                                        <strong>Tipo: </strong><?php echo $materia ['tipo']; ?><br />
																		<a href="download.php?name=<?php echo $materia['nomeEmenta'];?>">Baixe a Ementa</a><br />

                                                                    </div>
                                                                </div>
                                                                <br /><br /><br /><br /><br />
                                                            <?php endwhile; ?>


                                                        </section>
                                                        <h2>Terceiro Periodo</h2>
                                                       <section  id="caixa-materia" style="overflow: auto">
                                                            <?php
                                                            $stmt_p3 = sqlp3();
                                                            while ($materia = $stmt_p3->fetch(PDO::FETCH_ASSOC)):
                                                                ?>
                                                                <div class="box-materia">
                                                                    <div class="alert alert-info">
                                                                        <strong><?php echo $materia ['nome']; ?><br /></strong>
                                                                        <strong>Créditos:</strong> <?php echo $materia ['creditos']; ?><br />
                                                                        <strong>Tipo: </strong><?php echo $materia ['tipo']; ?><br />
																		<a href="download.php?name=<?php echo $materia['nomeEmenta'];?>">Baixe a Ementa</a><br />

                                                                    </div>
                                                                </div>
                                                                <br /><br /><br /><br /><br />
                                                            <?php endwhile; ?>


                                                        </section>

                                                        <h2>Quarto Periodo</h2>
                                                        <section  id="caixa-materia" style="overflow: auto">
                                                            <?php
                                                            $stmt_p4 = sqlp4();
                                                            while ($materia = $stmt_p4->fetch(PDO::FETCH_ASSOC)):
                                                                ?>
                                                                <div class="box-materia">
                                                                    <div class="alert alert-info">
                                                                        <strong><?php echo $materia ['nome']; ?><br /></strong>
                                                                        <strong>Créditos:</strong> <?php echo $materia ['creditos']; ?><br />
                                                                        <strong>Tipo: </strong><?php echo $materia ['tipo']; ?><br />
																		<a href="download.php?name=<?php echo $materia['nomeEmenta'];?>">Baixe a Ementa</a><br />
	
                                                                    </div>
                                                                </div>
                                                                <br /><br /><br /><br /><br />
                                                            <?php endwhile; ?>


                                                        </section>

                                                        <h2>Quinto Periodo</h2>
                                                        <section  id="caixa-materia" style="overflow: auto">
                                                            <?php
                                                            $stmt_p5 = sqlp5();
                                                            while ($materia = $stmt_p5->fetch(PDO::FETCH_ASSOC)):
                                                                ?>
                                                                <div class="box-materia">
                                                                    <div class="alert alert-info">
                                                                        <strong><?php echo $materia ['nome']; ?><br /></strong>
                                                                        <strong>Créditos:</strong> <?php echo $materia ['creditos']; ?><br />
                                                                        <strong>Tipo: </strong><?php echo $materia ['tipo']; ?><br />
																		<a href="download.php?name=<?php echo $materia['nomeEmenta'];?>">Baixe a Ementa</a><br />

                                                                    </div>
                                                                </div>
                                                                <br /><br /><br /><br /><br />
                                                            <?php endwhile; ?>


                                                        </section>

                                                        <h2>Sexto Periodo</h2>
                                                        <section  id="caixa-materia" style="overflow: auto">
                                                            <?php
                                                            $stmt_p6 = sqlp6();
                                                            while ($materia = $stmt_p6->fetch(PDO::FETCH_ASSOC)):
                                                                ?>
                                                                <div class="box-materia">
                                                                    <div class="alert alert-info">
                                                                        <strong><?php echo $materia ['nome']; ?><br /></strong>
                                                                        <strong>Créditos:</strong> <?php echo $materia ['creditos']; ?><br />
                                                                        <strong>Tipo: </strong><?php echo $materia ['tipo']; ?><br />
																		<a href="download.php?name=<?php echo $materia['nomeEmenta'];?>">Baixe a Ementa</a><br />

                                                                    </div>
                                                                </div>
                                                                <br /><br /><br /><br /><br />
                                                            <?php endwhile; ?>


                                                        </section>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--JANELA MODAL EDITA EMENTA-->
                            <div id="modal-materia">
                                <div class="modal-box-materia">
                                    <div class="modal-box-conteudo">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                Adicionar Disciplina
                                            </div>
                                            <div class="panel-body">
                                                <form name="formularioPost" id="ajax_materia" action="" method="post" onsubmit="return validaPost()" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label>Nome da Disciplina:</label>
                                                        <input name="editNomeDisciplina" class="form-control" type="text" required="">

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Créditos:</label>
                                                        <input name="editCredito" class="form-control" type="text" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tipo:</label>
                                                        <select data-toggle="dropdown" id="tipo" name=tipo class="btn btn-primary dropdown-toggle"><span class="caret" required=""></span>
                                                            <ul class="dropdown-menu">
                                                                <option value="Comum">Comum</option>
                                                                <option value="DOB Adm. Pública">DOB Adm. Pública</option>
                                                                <option value="DOB Economia">DOB Economia</option>
                                                                <option value="DOB C. Atuariais">DOB C. Atuariais</option>
                                                                <option value="Optativa C. Atuariais">Optativa C. Atuariais</option>
                                                                <option value="Optativa Economia">Optativa Economia</option>
                                                                <option value="Optativa Adm. Pública">Optativa Adm. Pública</option>
                                                            </ul>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Periodo:</label>
                                                        <select data-toggle="dropdown" id="periodo" name=periodo class="btn btn-primary dropdown-toggle"><span class="caret" required=""></span>
                                                            <ul class="dropdown-menu">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>

                                                            </ul>
                                                        </select>

                                                    </div>

                                                    <div class="form-group">
                                                   	  <label>Ementa</label>
                                                    	  <input type="file" name="arquivo"/>
                                                    </div>
                                                    <button type="submit" id="materia" class="btn btn-info">Salvar</button>
                                                    <br>
                                                        <br>
                                                            <div class="btn-add-post">
                                                                <button type="button" id="fechar" class="btn btn-info">X</button>
                                                            </div>
                                                            </form>

                                                            </div>
                                                            </div>

                                                            </div>

                                                            </div>
                                                            </div>
                                                            <!--FIM JANELA MODAL EDITA EMENTA-->
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


             <script src="assets/js/jquery-1.10.2.js"></script>
             <!-- BOOTSTRAP SCRIPTS -->
             <script src="assets/js/bootstrap.js"></script>
             <!-- METISMENU SCRIPTS -->
             <script src="assets/js/jquery.metisMenu.js"></script>
             <!-- WIZARD SCRIPTS -->
             <script src="assets/js/wizard/modernizr-2.6.2.min.js"></script>
             <script src="assets/js/wizard/jquery.cookie-1.3.1.js"></script>
             <script src="assets/js/wizard/jquery.steps.js"></script>
             <!-- CUSTOM SCRIPTS -->
             <script src="assets/js/custom.js"></script>
    </body>
</html>
