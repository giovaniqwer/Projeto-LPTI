<?php
session_start();
if (empty($_SESSION["emailID"]) || empty($_SESSION["emailNome"]) || empty($_SESSION["emailTipo"])) {
    header("Location:../login.php");
}else if($_SESSION["emailTipo"]!=2){
	header("Location:../negado.html");
}
require_once '../init.php';
include_once '../cadastro-class.php';
$PDO = db_connect();
$sql_count = "SELECT COUNT(*) AS total FROM Disciplina ORDER BY idDisciplina ASC";
$sql = "SELECT idDisciplina, ementa, Usuario_idUsuario, nome, cargaHoraria, Curso_idCurso FROM Disciplina ORDER BY nome ASC";
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
		  <link rel="stylesheet" href="estilo.css" type="text/css">
        <link rel="shortcut icon" href="img/fav.ico" type="image/x-icon">
        <!-- carregando a fonte Lato pelo google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

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
                            <a href="../index.php" class="active-menu-item">HOME</a>
                        </li>
                        <li>
                            <a href="../links.php">LINKS</a>
                        </li>
                        <li>
                            <a href="../contato.php">CONTATO</a>
                        </li>
                        <li>
                            <a href="../cadastro.php">CADASTRE-SE</a>
                        </li>
                        <li>
                            <a href="../login.php">LOGIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <div class="conteudo">
            <div id="wrapper">
                <br>

                <!-- /. NAV TOP -->
                <br>
                <div class="conteudo">

                    <nav class="navbar-default navbar-side" role="navigation">
                        <div class="sidebar-collapse">
                            <ul class="nav" id="main-menu">
                                <li>
                                    <a href="forum.php"><i class="fa fa-dashboard "></i>Principal<br></a>
                                </li>
                                <li>
                                    <a hr ef="#"><i class="fa fa-align-justify"></i>Eventos<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>

                                            <a href="minicurso.php"><i class="fa fa-play-circle">&nbsp;Mini Cursos</i></a>

                                        </li>
                                        <li>
                                            <a href="palestra.php"><i class="fa fa-bell ">&nbsp;Palestras</i></a>
                                        </li>
                                        <li>
                                            <a href="entreterimento.php"><i class="fa fa-circle-o"></i>Entreterimento</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="estagio.php"><i class="fa fa-search"></i>Estágio </a>
                                </li>
                                <li>
                                    <a href="anuncio.php"><i class="fa fa-search"></i>Anuncio </a>
                                </li>
                                <li>
                                    <a href="pesqext.php"><i class="fa fa-search"></i>Pesquisa e Extensão </a>
                                </li>
                                <li>
                                    <a href="inicCient.php"><i class="fa fa-globe"></i>Iniciação Cientifica</a>
                                </li>
                                <li>
                                    <a href="monitorias.php"><i class="fa fa-book"></i>Monitorias</a>
                                </li>
                                <li>
                                    <a href="outros.php"><i class="fa fa-archive"></i>Outros</a>
                                </li>
                                <li>
                                    <a class="active-menu" href="#"><i class="fa fa-align-justify"></i>Grade Curricular</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div id="page-wrapper">
                        <div id="page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="page-head-line">Disciplinas</h1>
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
                                                   <div class="l col50">
                                                   	<a class="grade_link remove_mobile l" id="info_open" href="#">Calma q eu te salvo, tiu</a>
                                              		</div>
                                                </div>
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
			


			<!--Grade-->
			<div id="info_all" class="t">
        <nav id="info_nav" class="l">
            <div class="center">
                <ul class="l">
                    <div class="t info_link sel info_go"><li>DISTRIBUIÇÃO DO CURSO</li></div>
                    <div class="t info_link info_go"><li>GRADE POR PERÍODO</li></div>
                    <div class="t info_link info_go"><li>OPTATIVAS</li></div>
                    <div class="t info_link info_go"><li>MAIS</li></div>
                    <div class="t info_link info_right" id="info_exit"><li>SAIR</li></div>
                </ul>
            </div>
        </nav>
        <div id="infografico">
            <div class="l info_box">
                <div class="center">
                    <div class="l ph32 info_inner">
                        <div class="info_classe">
                            <div class="ic_rect">
                                <img src="img/q4.jpg">
                            </div>
                            <h1>1620 hrs</h1>
                            <h2>MATÉRIAS OBRIGATÓRIAS</h2>
                        </div>

                        <div class="info_classe">
                            <div class="ic_rect">
                                <img src="img/q5.jpg">
                            </div>
                            <h1>360 hrs</h1>
                            <h2>F. COMPLEMENTAR<br>F. LIVRE</h2>
                        </div>

                        <div class="info_classe">
                            <div class="ic_rect">
                                <img src="img/q3.jpg">
                            </div>
                            <h1>180 hrs</h1>
                            <h2>OPTATIVAS<br>LIVRES</h2>
                        </div>

                        <div class="info_classe">
                            <div class="ic_rect">
                                <img src="img/q2.jpg">
                            </div>
                            <h1>120 hrs</h1>
                            <h2>OPTATIVAS DIRECIONADAS</h2>
                        </div>

                        <div class="info_classe">
                            <div class="ic_rect">
                                <img src="img/q1.jpg" >
                            </div>
                            <h1>120 hrs</h1>
                            <h2>FORMAÇÃO<br>LIVRE</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="l ph32 info_more">
                        <h1>2400 hrs</h1>
                        <h2>CARGA TOTAL</h2>
                    </div>
                </div>
            </div>
            <div class="info_up l"></div>
            <div class="info_down l"></div>
            <div class="l info_box">
                <div class="center">
                    <div class="l ph32 info_inner">
                        <div class="mat_filter_box l">
                            <span>ESCOLHA UM PERÍODO:</span>
                            <div class="mfb_esp"></div>
                            <div class="mfb_bt per_select  sel" data-per="1">1</div>
                            <div class="mfb_bt per_select" data-per="2">2</div>
                            <div class="mfb_bt per_select" data-per="3">3</div>
                            <div class="mfb_bt per_select" data-per="4">4</div>
                            <div class="mfb_bt per_select" data-per="5">5</div>
                            <div class="mfb_bt per_select" data-per="6">6</div>
                            <div class="mfb_bt per_select" data-per="7">7</div>
                            <div class="mfb_bt per_select" data-per="8">8</div>
                        </div>
                        <div class="mat_show l" id="ob_list">
						<?php while ($disc = $stmt->fetch(PDO::FETCH_ASSOC)): ?>

				<div class="ms_item l show1 show2" data-per="1"><div class="msi_hrs"><div class="msi_bola"></div> <?php $disc['cargaHoraria'] ?></div>
				<div class="msi_nome"><h3> <?php $disc['nome']?> </h3><h4><?php $disc['idDisciplina'] ?></h4><p><?php $disc['ementa'] ?></p></div>
				<div class="msi_oferta">
				<span class="msi_bloco on">TODO SEMESTRE</span>
				<div class="msi_vert l"></div>
				<div class="msi_vert l"></div>
				<span class="msi_bloco on">S</span>
                <span class="msi_bloco off">T</span>
                <span class="msi_bloco on">Q</span>
                <span class="msi_bloco off">Q</span>
                <span class="msi_bloco on">S</span>
				<div class="msi_vert l"></div></div></div>
					<?php endwhile; ?>
            </div>
            <div class="info_up l"></div>
            <div class="info_down l"></div>
            <div class="l info_box">
                <div class="center">
                    <div class="l ph32 info_inner">
                        <div class="mat_filter_box l">
                            <span>FILTRAR:</span>
                            <div class="mfb_esp"></div>
                            <div class="mfb_bt type_select sel ts_livre" data-type="livre"></div>
                            <div class="mfb_bt type_select sel ts_dir" data-type="dir"></div>
                            <div class="mfb_esp"></div>                            
                            <div class="mfb_bt cod_select sel" data-cod="mat">MAT</div>
                            <div class="mfb_bt cod_select sel" data-cod="dcc">DCC</div>
                            <div class="mfb_bt cod_select sel" data-cod="est">EST</div>
                            <div class="mfb_bt cod_select sel" data-cod="fis">FIS</div>
                        </div>
                        <div class="mat_show l" id="op_list">

<div class="ms_item l show1 show2" data-cod="mat" data-type="livre"><div class="msi_hrs"><div class="msi_bola"></div> 90 hrs</div><div class="msi_nome"><h3>Cálculo Diferencial e Integral I</h3><h4>MAT001</h4><p>Integrais- impróprias: seqüências séries numéricas. Funções de R em R. Derivadas. Integrais. Aplicações</p></div><div class="msi_oferta"><span class="msi_bloco on">TODO SEMESTRE</span><div class="msi_vert l"></div><div class="msi_vert l"></div><span class="msi_bloco on">S</span>
                <span class="msi_bloco off">T</span>
                <span class="msi_bloco on">Q</span>
                <span class="msi_bloco off">Q</span>
                <span class="msi_bloco on">S</span><div class="msi_vert l"></div><span class="msi_bloco on">ONLINE</span><div class="msi_vert l"></div></div></div><div class="ms_item l show1 show2" data-cod="est" data-type="livre"><div class="msi_hrs"><div class="msi_bola" ></div> 90 hrs</div><div class="msi_nome"><h3>Geometria Analítica e Álgebra Linear</h3><h4>MAT105</h4><p>Álgebra vetorial. Retas e planos. Matrizes, sistemas lineares e determinantes. Espaço vetorial Rn. Autovalores e autovetores de matrizes. Diagonalização de matrizes simétricas.</p></div><div class="msi_oferta"><span class="msi_bloco on">TODO SEMESTRE</span><div class="msi_vert l"></div><div class="msi_vert l"></div><span class="msi_bloco on">S</span>
                <span class="msi_bloco off">T</span>
                <span class="msi_bloco on">Q</span>
                <span class="msi_bloco off">Q</span>
                <span class="msi_bloco on">S</span><div class="msi_vert l"></div></div></div><div class="ms_item l show1 show2" data-cod="fis" data-type="dir"><div class="msi_hrs"><div class="msi_bola" ></div> 90 hrs</div><div class="msi_nome"><h3>fis</h3><h4>MAT105</h4><p>Álgebra vetorial. Retas e planos. Matrizes, sistemas lineares e determinantes. Espaço vetorial Rn. Autovalores e autovetores de matrizes. Diagonalização de matrizes simétricas.</p></div><div class="msi_oferta"><span class="msi_bloco on">TODO SEMESTRE</span><div class="msi_vert l"></div><div class="msi_vert l"></div><span class="msi_bloco on">S</span>
                <span class="msi_bloco off">T</span>
                <span class="msi_bloco on">Q</span>
                <span class="msi_bloco off">Q</span>
                <span class="msi_bloco on">S</span><div class="msi_vert l"></div></div></div>                        </div>

                    </div>
                </div>
            </div>
            <div class="info_up l"></div>
            <div class="info_down l"></div>
            <div class="l info_box">
                <div class="center">
                    <div class="l info_inner">
                        <div class="col50 ph32 l">
                            <div class="ic_rect more_rect">
                                <img src="img/q5.jpg">
                            </div>
                            <div class="more_about">
                                <h3>formação complementar e formação livre</h3>
                                <p>É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível.</p>
                            </div>
                        </div>

                        <div class="col50 ph32 l">
                            <div class="ic_rect more_rect">
                                <img src="img/q1.jpg">
                            </div>
                            <div class="more_about">
                                <h3>formação<br>livre</h3>
                                <p>Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="infografico_bg"></div>
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
        <script src="jquery-1.9.1.min.js"></script>
        <script src="js.js" type="text/javascript"></script>
    </body>

</html>

