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
