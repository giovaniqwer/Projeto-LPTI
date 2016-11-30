<?php
require 'init.php';
?>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="alunos">
        <!--CSS FORUM-->        <link href="forum-calendario/assets/css/bootstrap.css" rel="stylesheet">
        <link href="forum-calendario/assets/css/font-awesome.css" rel="stylesheet">
        <link href="forum-calendario/assets/css/basic.css" rel="stylesheet">
        <link href="forum-calendario/assets/css/custom.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <!--BIBLIOTECAS JS -->
        <link href="assets/img/favicon.png" rel="shortcut icon">
        <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery-ui.js"></script>
        <script type="text/javascript" src="assets/js/ajax.js"></script>

        <title>Divulga ICSA</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/css.css" rel="stylesheet">
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
                            <a href="links.html">LINKS</a>
                        </li>
                        <li>
                            <a href="contato.php">CONTATO</a>
                        </li>
                        <li>
                            <a href="cadastro.php">CADASTRE-SE</a>
                        </li>
                        <li>
                            <a href="login.php">LOGIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <!--CONTEUDO-->
        <div class="conteudo">
            <div class="ok">
                <body data-spy="scroll">
                    <div id="titulo">
                        <h3>Contato</h3>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class=" text-center">
                                <div class="panel panel-default text-center">
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
                                                    <form name="formulario" id="forms" action="add.php" method="post" onSubmit="return validaContato()" >
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
            <!--RODA PÉ-->

            <!--SCRIPTS JS-->
            <script src="assets/js/jquery-1.11.1.js"></script>
            <script src="assets/js/bootstrap.js"></script>
            <script src="assets/js/custom.js"></script>
            <script src="forum-calendario/assets/js/wizard/jquery.steps.js"></script>
            <script src="forum-calendario/assets/js/bootstrap.js"></script>
            <script src="forum-calendario/assets/js/jquery.metisMenu.js"></script>
            <script src="forum-calendario/assets/js/custom.js"></script>
            <script src="forum-calendario/assets/js/jquery.mixitup.min.js"></script>
            <script src="forum-calendario/assets/js/wizard/modernizr-2.6.2.min.js"></script>
            <script src="forum-calendario/assets/js/wizard/jquery.cookie-1.3.1js"></script>
    </body>
</html>
