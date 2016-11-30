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
                        <a href="../admin/inicio.php">INÍCIO</a>
                    </li>
                    <li>
                        <a href="../admin/listaUsuario.php">USUÁRIOS</a>
                    </li>
                    <li>
                        <a href="../admin/listaContato.php">MENSAGENS</a>
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
    <br>    <br>
    <br>
    <br>
<div class="row" id="update">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            Adicionar Disciplina
                                        </div>
                                        <div class="panel-body">
<form action="add-disciplina.php" method="post" enctype="multipart/form-data">
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
  </form>    
  <br>
    <br>
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
