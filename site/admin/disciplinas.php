
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
		  <script type="text/javascript">

		google.charts.load('current', {packages:['wordtree']});
      google.charts.setOnLoadCallback(drawSimpleNodeChart);
      function drawSimpleNodeChart() {
        var nodeListData = new google.visualization.arrayToDataTable([
          ['id', 'childLabel', 'parent', 'Créditos', { role: 'style' }],
          [0, 'Grade básica', -1, 1, 'black'],
          [1, '1º SEMESTRE', 0, 1, 'green'],
          [2, '2º SEMESTRE', 0, 1, 'red'],
          [3, '3º SEMESTRE', 0, 1, 'purple'],
          [4, '4º SEMESTRE', 0, 1, 'blue'],
          [5, '5º SEMESTRE', 0, 1, 'blue'],
          [6, '6º SEMESTRE', 0, 1, 'blue'],
			 [7, 'Introdução à economia', 1, 4, 'green'],
			 [8, 'Introdução à atuária', 1, 4, 'green'],
			 [9, 'Introdução à administração', 1, 4, 'green'],
			 [10,'Matemática I', 1, 6, 'green'],
			 [11,'Filosofia da ciência', 1, 2, 'green'],
			 [12,'Ciências sociais', 2, 4, 'red'],
			 [13,'História econômica geral', 2, 4, 'red'],
			 [14,'Matemática II', 2, 6, 'red'],
			 [15,'Comunicação', 2, 4, 'red'],
			 [16,'Metodologia de pesquisa', 2, 2, 'red'],
			 [17,'Ciência política', 3, 4, 'purple']
          ]);

        var options = {
          colors: ['black', 'black', 'black'],
          wordtree: {
            format: 'explicit',
            type: 'suffix'
          }
        };

        var wordtree = new google.visualization.WordTree(document.getElementById('wordtree_explicit'));
        wordtree.draw(nodeListData, options);
      }
       
   </script>
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
                                <div class="col-md-4 col-sm-4" id="larg">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="alert-link">
                                                <p>De qual curso estamos falando?</p>
                                            </div>

                                        </div>


                                        <!-- Descrição das disciplinas -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="panel-body">
                                                    <span> Ow wow wow, calmae, qq se ta falano? eu n escolhi curso nenhum nao vei. </span>
                                                    <button onclick="mostraDiagrama()">Calma q eu te salvo, tiu</button>
                                                </div>
                                                 <!-- DIAGRAMA -->
                                       			 <div id="wordtree_explicit" style="width: auto; height: auto;"></div>


                                                <div class="col-md-4 ">
                                                    <div class="alert alert-info text-center">
                                                        <h4> Humanas </h4>
                                                        <hr/>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                                                        <hr/>

                                                        <a href="Humanas.php" class="btn btn-info">Ver mais...</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="alert alert-info text-center">
                                                        <h4> Exatas </h4>
                                                        <hr/>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.</p>
                                                        <hr/>
                                                        <a href="exatas.php" class="btn btn-info">Ver mais...</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="alert alert-info text-center">
                                                        <h4>QQ euto faseno</h4>
                                                        <hr/>
                                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.</p>
                                                        <hr/>
                                                        <a href="qqeutofaseno.php" class="btn btn-success">Ver mais...</a>
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

 