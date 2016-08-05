
<div class="conteudo">
    <div class="ok">

        <body data-spy="scroll">
            <div id="titulo">
                <h3>Login</h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class=" text-center" id="login">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Entre no Divulga ICSA!</h3>
                            </div>
                            <div class="panel-body">
                                <form action="enter-login.php" role="form" method="post" name="formLogin" onsubmit=" return validaLogin()">
                                    <div class="form-group has-feedback">
                                        <div class="col-sm-2">
                                            <label for="inputEmail3" class="control-label" id="login">Email</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control input-lg" id="inputEmail3" placeholder="Email" name="email">
                                            <!--  <span class="fa fa-3x fa-envelope fa-fw pull-right text-muted"></span> -->
                                        </div>
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <div class="col-sm-2">
                                            <label for="inputPassword3" class="control-label">Senha</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control input-lg" id="inputPassword3" placeholder="senha" name="senha">
                                            <!-- <span class="fa fa-3x fa-asterisk fa-fw pull-right text-muted"></span> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-6" id="entrar">
                                            <br>
                                            <button type="submit" class="active btn btn-block btn-info btn-lg">Entrar
                                                <i class="fa fa-fw fa-lg fa-sign-in"></i>
                                            </button>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

