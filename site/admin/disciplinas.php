<?php
session_start();
if (empty($_SESSION["emailID"]) || empty($_SESSION["emailNome"]) || empty($_SESSION["emailTipo"])) {
    header("Location:../login.php");
} else if ($_SESSION["emailTipo"] != 1) {
    header("Location:../negado.html");
}
require_once '../init.php';
include_once '../sql.php';
$PDO = db_connect();
$sql_count = "SELECT COUNT(*) AS total FROM Post ORDER BY idPost ASC";
$sql = "SELECT
    Post.idPost,
    Post.idUsuario,
    Post.dataPost,
    Post.conteudoPost,
    Post.Tag,
    Post.Categoria_idCategoria,
    Usuario.nome,
    Usuario.sobrenome
FROM Post
LEFT JOIN Usuario ON Usuario.idUsuario = Post.idUsuario
WHERE Categoria_idCategoria =5
ORDER BY idPost DESC ";
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
        <!-- SCRIPTS PARA OS DIAGRAMAS (GOOGLE CHARTS)-->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		 
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
                                    <a href="admin.php"><i class="fa fa-dashboard "></i>Principal<br></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-bell"></i>Eventos<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>

                                            <a href="minicurso.php"><i class="fa fa-graduation-cap">&nbsp;Mini Cursos</i></a>

                                        </li>
                                        <li>
                                            <a href="palestra.php"><i class="fa fa-cube">&nbsp;Palestras</i></a>
                                        </li>
                                        <li>
                                            <a href="entretenimento.php"><i class="fa fa-smile-o"></i>Entretenimento</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a  href="estagio.php"><i class="fa fa-briefcase "></i>Estágio </a>
                                </li>
                                <li>
                                    <a href="anuncio.php"><i class="fa fa-bullhorn"></i>Anúncio </a>
                                </li>
                                <li>
                                    <a href="pesqext.php"><i class="fa fa-search"></i>Pesquisa e Extensão </a>
                                </li>
                                <li>
                                    <a href="inicCient.php"><i class="fa fa-flask"></i>Iniciação Cientifica</a>
                                </li>
                                <li>
                                    <a href="monitorias.php"><i class="fa fa-book"></i>Monitorias</a>
                                </li>
                                <li>
                                    <a href="outros.php"><i class="fa fa-archive"></i>Outros</a>
                                </li>
                                <li>
                                    <a class="active-menu" href="disciplinas.php"><i class="fa fa-align-justify"></i>Grade Curricular</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!--FIM MENU LATERAL-->
                    <div id="page-wrapper">
                        <div id="page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="page-head-line">Disciplinas</h1>
                                    <center>

                                    </center>
                                </div>
                            </div>
                            <br>
                           
								 <!-- /. ROW  -->
               <div class="row">
                  <div class="col-md-12">                     
         <div class="panel panel-default">
                        <div class="panel-heading">
                            Horizontal Wizard
                        </div>
                        <div class="panel-body">
                             <div id="wizard">
                <h2>First Step</h2>
                <section>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas arcu sem, hendrerit a tempor quis, 
                        sagittis accumsan tellus. In hac habitasse platea dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus. 
                        Nam tellus dolor, tristique ac tempus nec, iaculis quis nisi.</p>
                </section>

                <h2>Second Step</h2>
                <section>
                    <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac ligula elementum pellentesque. 
                        In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum 
                        dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien a diam adipiscing consectetur. 
                        In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a diam. 
                        Donec non pulvinar urna. Aliquam id velit lacus.</p>
                </section>

                <h2>Third Step</h2>
                <section>
                    <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo, 
                        pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat. 
                        Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris 
                        venenatis.</p>
                </section>

                <h2>Forth Step</h2>
                <section>
                    <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor. 
                        Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae. 
                        Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.</p>
                </section>
            </div>
                             
                        </div>
                    </div>
                 </div>
                </div>

                                    </div>
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
        <!--FIM DO RODAPÉ-->





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

        <script src="../forum-calesndario/assets/js/wizard/modernizr-2.6.2.min.js"></script>
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

 
