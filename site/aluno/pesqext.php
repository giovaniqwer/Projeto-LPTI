<?php
session_start();
if (empty($_SESSION["emailID"]) || empty($_SESSION["emailNome"]) || empty($_SESSION["emailTipo"])) {
    header("Location:../login.php");
} else if ($_SESSION["emailTipo"] != 2) {
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
WHERE Categoria_idCategoria =6
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
                                    <a href="aluno.php"><i class="fa fa-dashboard "></i>Principal<br></a>
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
                                    <a href="estagio.php"><i class="fa fa-briefcase "></i>Estágio </a>
                                </li>
                                <li>
                                    <a href="anuncio.php"><i class="fa fa-bullhorn"></i>Anúncio </a>
                                </li>
                                <li>
                                    <a class="active-menu" href="pesqext.php"><i class="fa fa-search"></i>Pesquisa e Extensão </a>
                                </li>
                                <li>
                                    <a href="inicCient.php"><i class="fa fa-flask"></i>Iniciação Cientifica</a>
                                </li>
                                <li>
                                    <a href="monitorias.php"><i class="fa fa-book"></i>Monitorias</a>
                                </li>

                                <li>
                                    <a href="disciplinas.php"><i class="fa fa-align-justify"></i>Grade Curricular</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!--FIM MENU LATERAL-->
                    <div id="page-wrapper">
                        <div id="page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="page-head-line">Pesquisa e Extensão</h1>
                                    <center>
                                        <div id="divBusca">
                                            <img src="img/search3.png" alt="Buscar..." />
                                            <input type="text" id="txtBusca" placeholder="Buscar..." />
                                            <button id="btnBusca">Buscar</button>
                                        </div>
                                    </center>
                                </div>
                            </div>
                            <br>
                            <!-- /. POSTAGENS -->

                            <div class="row">
                                <div class="col-md-4 col-sm-4" id="largura">
                                    <?php while ($post = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                                        <div class="panel panel-info">
                                            <div class="panel-heading">


                                                <div class="alert-link"><b>
                                                        <?php echo $post['nome'] . ' ' . $post['sobrenome'] ?> &nbsp&nbsp&nbsp&nbsp - &nbsp&nbsp&nbsp&nbsp <?php echo $post ['dataPost']; ?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                    </b>
                                                    <?php
                                                    if ($_SESSION["emailID"] == $post['idUsuario']) {
                                                        echo "<div id='dropdownExcluir'><div class='btn-group'><button data-toggle='dropdown' class='btn btn-inverse dropdown-toggle'><span class='caret'></span></button><ul class='dropdown-menu'><li><a href='../Post/delete.php?id=" . $post ['idPost'] . "' onclick='return confirm('Deseja realmente excluir este Post ?');'>Excluir</a></li></ul></div></div>";
                                                    }
                                                    ?>
                                                </div>

                                            </div>
                                            <div class="panel-body">
                                                <?php echo $post ['conteudoPost']; ?>

                                            </div>

                                            <div class="panel-footer">
                                                <form name="formularioComentario" id="formComentario" action="../Comentario/add-coment.php" method="post" >
                                                    <input type="hidden" name="id_post" value="<?php echo $post ['idPost']; ?>">
                                                    <div class="form-group">
                                                        <label>Comentario</label>
                                                        <textarea id="comentario_id" name="textoComentario" class="form-control" rows="1"  required=""></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-info">Enviar Comentario </button>
                                                    <div class="maisComent">
                                                        <a onclick="return hideandshow();" href="#">Ver comentários</a>
                                                    </div>

                                                    <br>
                                                    <br>
                                                    <div id="comments">
                                                        <?php
                                                        $stmt_comentario = sqlComentario($post ['idPost']);
                                                        while ($coment = $stmt_comentario->fetch(PDO::FETCH_ASSOC)):
                                                            ?>

                                                            <div class="alert alert-info">
                                                                <div class="alert-link">
                                                                    <?php echo $coment['nome'] . ' ' . $post['sobrenome'] ?>
                                                                    <?php
                                                                    if ($_SESSION["emailID"] == $post['idUsuario']) {
                                                                        echo "<div id='dropdownExcluir'><div class='btn-group'><button data-toggle='dropdown' class='btn btn-inverse dropdown-toggle'><span class='caret'></span></button><ul class='dropdown-menu'><li><a href='../Comentario/delete.php?id=" . $coment ['idComentario'] . "' onclick='return confirm('Deseja realmente excluir este Comentario ?');'>Excluir</a></li></ul></div></div>";
                                                                    }
                                                                    ?>
                                                                </div>
                                                                <?php echo $coment ['textoComentario']; ?>
                                                            </div>

                                                        <?php endwhile; ?>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                <?php endwhile; ?>
                            </div>
                                <!-- /. FIM POSTAGENS -->
                                <div class="col-md-6" id="boxlateral">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <i class="fa fa-bars fa-fw"></i>Menu
                                        </div>

                                        <div class="panel-body">
                                            <div class="list-group">

                                                <a href="#" class="list-group-item">
                                                    <div class="add-post">
                                                        <i class="fa fa-plus fa-fw"></i> Adicionar Postagem
                                                    </div>
                                                    <span class="pull-right text-muted small"><em></em>
                                                    </span>
                                                </a>
                                            </div>

                                            <!-- /.list-group -->

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--JANELA MODAL ADD POST-->
                    <div id="modal">
                        <div class="modal-box">
                            <div class="modal-box-conteudo">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        Postagem
                                    </div>
                                    <div class="panel-body">
                                        <form name="formularioPost" id="formPost" action="../Post/add-post.php" method="post" onsubmit="return validaPost()">
                                            <div class="form-group">
                                                <label>Post:</label>
                                                <textarea name="conteudoPost" id="pt" class="form-control" rows="3"></textarea>
                                                <label>Categoria:</label>
                                            </div>

                                            <div class="btn-group">
                                                <select data-toggle="dropdown" id="catg" name=categoriaPost class="btn btn-primary dropdown-toggle"><span class="caret"></span>
                                                    <ul class="dropdown-menu">
                                                        <option value="1">Mini Curso</option>
                                                        <option value="2">Palestra</option>
                                                        <option value="3">Entretenimento</option>
                                                        <option value="4">Estágio</option>
                                                        <option value="5">Anúncio</option>
                                                        <option value="6">Pesquisa e Extensão</option>
                                                        <option value="7">Iniciacao Cientifica</option>
                                                        <option value="8">Monitorias</option>
                                                        <option value="9">Outros</option>
                                                    </ul>
                                                </select>
                                                <br />
                                                <br>
                                                <div class="input-group">
                                                    <label>Palavra Chave:</label>
                                                    <input type="text" name="tagPost" id="tag" class="form-control" placeholder="Adicionar Tag" />
                                                </div>
                                            </div>


                                            <button type="submit" id="post" class="btn btn-info">Postar</button>
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
                    <!--FIM JANELA MODAL ADD POST-->

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

                    <script src="../forum-calendario/assets/js/wizard/modernizr-2.6.2.min.js"></script>
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
