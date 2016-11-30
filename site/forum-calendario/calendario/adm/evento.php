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
		require_once 'init.php';
		$PDO = db_connect();
		$sql_count = "SELECT COUNT(*) AS total FROM Evento ORDER BY data ASC";
		$sql = "SELECT idEvento, data, local, palestrante, horario, tema, descricao, classificacao FROM Evento ORDER BY data ASC";
 
		$stmt_count = $PDO->prepare($sql_count);
		$stmt_count->execute();
		$total = $stmt_count->fetchColumn();
 
		$stmt= $PDO->prepare($sql);
		$stmt->execute();
	?>


		  <div style="padding:0px 20px">	
	<h3>Lista de Eventos</h3>
	<p>Total de eventos: <?php echo $total ?></p>
	<?php if($total > 0): ?>
	<table width="80%" border="1"> 
		<thead>			
			<tr>
				<th width="10%">Tema</th>
				<th width="12%">Palestrante</th>
				<th width="10%">Local</th>
				<th width="5%">Horário</th>
				<th width="8%">Data</th>
				<th width="20%">Descrição</th>
				<th width="10%">Classificação</th>
				<th width="5%">Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php while($evento = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
			<tr>
				<?php if($evento['classificacao']=='3'):?> 
					<td bgcolor="#d6e9c6"><?php echo $evento['tema'] ?></td>
					<td bgcolor="#d6e9c6"><?php echo $evento['palestrante'] ?></td>
					<td bgcolor="#d6e9c6"><?php echo $evento['local'] ?></td>
					<td bgcolor="#d6e9c6"><?php echo $evento['horario'] ?></td>
					<td bgcolor="#d6e9c6"><?php echo dateConvert($evento['data']) ?></td>
					<td bgcolor="#d6e9c6"><?php echo $evento['descricao'] ?></td>
					<td bgcolor="#d6e9c6"><?php echo $evento['classificacao'] ?></td>
					<td bgcolor="#d6e9c6">
						<a style="color:black" href="form-edit.php?id=<?php echo $evento['idEvento']?> ">Editar</a>
						<a style="color:black" href="delete.php?id=<?php echo $evento['idEvento'] ?>">Excluir</a> 
					</td>
						
				<?php elseif($evento['classificacao']=='4'):?> 
					<td bgcolor="#faebcc"><?php echo $evento['tema'] ?></td>
					<td bgcolor="#faebcc"><?php echo $evento['palestrante'] ?></td>
					<td bgcolor="#faebcc"><?php echo $evento['local'] ?></td>
					<td bgcolor="#faebcc"><?php echo $evento['horario'] ?></td>
					<td bgcolor="#faebcc"><?php echo dateConvert($evento['data']) ?></td>
					<td bgcolor="#faebcc"><?php echo $evento['descricao'] ?></td>
					<td bgcolor="#faebcc"><?php echo $evento['classificacao'] ?></td>
					<td bgcolor="#faebcc">
						<a style="color:black" href="form-edit.php?id=<?php echo $evento['idEvento']?> ">Editar</a>
						<a style="color:black" href="delete.php?id=<?php echo $evento['idEvento'] ?>">Excluir</a> 
					</td>
					
					<?php elseif($evento['classificacao']=='1'):?> 
					<td bgcolor="#ebccd1"><?php echo $evento['tema'] ?></td>
					<td bgcolor="#ebccd1"><?php echo $evento['palestrante'] ?></td>
					<td bgcolor="#ebccd1"><?php echo $evento['local'] ?></td>
					<td bgcolor="#ebccd1"><?php echo $evento['horario'] ?></td>
					<td bgcolor="#ebccd1"><?php echo dateConvert($evento['data']) ?></td>
					<td bgcolor="#ebccd1"><?php echo $evento['descricao'] ?></td>
					<td bgcolor="#ebccd1"><?php echo $evento['classificacao'] ?></td>
					<td bgcolor="#ebccd1">
						<a style="color:black" href="form-edit.php?id=<?php echo $evento['idEvento']?> ">Editar</a>
						<a style="color:black" href="delete.php?id=<?php echo $evento['idEvento'] ?>">Excluir</a> 
					</td>
					
					<?php elseif($evento['classificacao']=='2'):?> 
					<td><?php echo $evento['tema'] ?></td>
					<td><?php echo $evento['palestrante'] ?></td>
					<td><?php echo $evento['local'] ?></td>
					<td><?php echo $evento['horario'] ?></td>
					<td><?php echo dateConvert($evento['data']) ?></td>
					<td><?php echo $evento['descricao'] ?></td>
					<td><?php echo $evento['classificacao'] ?></td>
					<td>
						<a style="color:black" href="form-edit.php?id=<?php echo $evento['idEvento']?> ">Editar</a>
						<a style="color:black" href="delete.php?id=<?php echo $evento['idEvento'] ?>">Excluir</a> 
					</td>
			</tr>
			<?php endif; ?>
			<?php endwhile; ?>
 		</tbody>
	</table>
 	<?php else: ?>
 	<p> Nenhum Evento registrado </p>
 	<?php endif; ?>
 	<br> 
 	<h4><a href="form-add.php" value="novo evento">novo evento</a></h4>
 	</div>
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
