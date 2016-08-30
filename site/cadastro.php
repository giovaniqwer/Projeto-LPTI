<?php
require 'init.php';
?>
<!--CONTEUDO-FORMULARIO CADASTRO-->
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="alunos">
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
        <div class="conteudo">
            <div class="ok">

                <body data-spy="scroll">

                    <div id="titulo">
                        <h3>Cadastre-se</h3>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class=" text-center">
                                <div class="panel panel-default text-center" id="cadastro">
                                    <div class="panel-heading">
                                        <h3 class="panel-title text-center">Faça parte do Divulga ICSA!</h3>
                                    </div>
                                    <div class="panel-body">
                                        <form name="formulario" id="forms" action="add-cadastro.php" method="post" onsubmit="return verificadadoscadastro()">
                                            <div class="row">

                                                <div class="form-group">
                                                    <label>Nome:</label>
                                                    <input type="text" name="first_name" id="first_name" class="form-control input-lg floatlabel">
                                                </div>
                                                <div class="form-group">
                                                    <label>Sobrenome:</label>
                                                    <input type="text" name="last_name" id="last_name" class="form-control input-lg">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label>E-mail:</label>
                                                    <input type="email" name="email" id="email" class="form-control input-lg" >
                                                </div>
                                                <div class="form-group">
                                                    <label>Matricula Unifal:</label>
                                                    <input type="text" name="matricula" id="matricula" class="form-control input-lg" >
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="form-group">
                                                    <label>Senha:</label>
                                                    <input type="password" name="senha" id="senha" class="form-control input-lg">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirme sua senha:</label>
                                                    <input type="password" name="password_confirmation" id="cofirmacao_senhacadastro" class="form-control input-lg">
                                                </div>
                                            </div>
                                            <input type="submit" value="Confirmar" class="active btn btn-block btn-info btn-lg">
                                        </form>
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
