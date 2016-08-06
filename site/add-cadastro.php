<?php
 require_once 'init.php';
 include_once 'cadastro-class.php';
 // pega os dados do formulário
 $nome = isset($_POST['first_name']) ? $_POST['first_name'] : null;
 $sobrenome = isset($_POST['last_name']) ? $_POST['last_name'] : null;
 $senha= isset($_POST['password_confirmation']) ? $_POST['password_confirmation'] : null;
 $email = isset($_POST['email']) ? $_POST['email'] : null;
 $matricula= isset($_POST['matricula']) ? $_POST['matricula'] : null;
 $tipo = 2;


 $usuario = new Usuario($nome,$sobrenome,$senha, $email, $matricula, $tipo);

 // insere no BD
 $PDO = db_connect();
 $sql = "INSERT INTO Usuario(nome,sobrenome, senha, email,identificacao, TipoUsuario_idTipoUsuario) VALUES(:nome, :sobrenome, :senha, :email, :matricula, :tipo)";
 $stmt = $PDO->prepare($sql);
 $stmt->bindParam(':nome', $usuario->getNome());
 $stmt->bindParam(':sobrenome', $usuario->getSobrenome());
 $stmt->bindParam(':senha', $usuario->getSenha());
 $stmt->bindParam(':email', $usuario->getEmail());
 $stmt->bindParam(':matricula', $usuario->getIdentificacao());
 $stmt->bindParam(':tipo', $usuario->getTipo());

 if($stmt->execute()){
    header ('Location: login.php');
 }else{
    echo "Erro ao cadastrar!!";
    print_r($stmt->errorInfo());
 }
?>
