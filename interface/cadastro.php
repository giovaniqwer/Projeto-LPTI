<?php
    require 'init.php';
?>
<!--CONTEUDO-FORMULARIO CADASTRO-->
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
       <form name="formulario" id="forms" action="add-cadastro.php" method="post" onsubmit=" return verificadadoscadastro()">
       <div class="row">
         <div class="col-md-1">
         <i class="fa fa-3x fa-fw fa-male text-muted"></i>
         </div>
         <div class="col-xs-6 col-sm-6 col-md-5">
         <div class="form-group">
           <input type="text" name="first_name" id="first_name" class="form-control input-lg floatlabel" placeholder="Primeiro Nome">
         </div>
         </div>
         <div class="col-xs-6 col-sm-6 col-md-5">
         <div class="form-group">
           <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Último Nome">
         </div>
         </div>
         <div class="col-md-1">
         <i class="fa fa-3x fa-fw fa-male pull-right text-muted"></i>
         </div>
       </div><br>
       <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-5">
         <div class="form-group">
           <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email">
         </div>
         </div>
         <div class="col-md-1">
         <i class="fa fa-3x fa-envelope fa-fw pull-right text-muted"></i>
         </div>
         <div class="col-md-1">
         <i class="fa fa-3x fa-barcode fa-flip-vertical fa-fw pull-left text-muted"></i>
         </div>
         <div class="col-xs-6 col-sm-6 col-md-5">
         <div class="form-group">
           <input type="text" name="matricula" id="matricula" class="form-control input-lg" placeholder="Matrícula UNIFAL">
         </div>
         </div>
       </div>
       <div class="row">
         <div class="col-md-1">
         <i class="fa fa-3x fa-asterisk fa-fw pull-left text-muted"></i>
         </div><br>
         <div class="col-xs-6 col-sm-6 col-md-5">
         <div class="form-group">
           <input type="password" name="senha" id="senha" class="form-control input-lg" placeholder="Senha">
         </div>
         </div>
         <div class="col-xs-6 col-sm-6 col-md-5">
         <div class="form-group">
           <input type="password" name="password_confirmation" id="cofirmacao_senhacadastro" class="form-control input-lg" placeholder="Confirme sua senha">
         </div>
         </div>
         <div class="col-md-1">
         <i class="fa fa-3x fa-asterisk fa-fw pull-right text-muted"></i>
         </div>
       </div>
       <input type="submit" value="Confirmar" class="btn btn-info btn-block" >
       </form>
     </div>
     </div>
   </div>
   </div>
 </div>
</div>
</div>
