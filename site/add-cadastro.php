<?php

require_once 'init.php';
include_once 'cadastro-class.php';

//CONFERE SE O E-MAIL JÁ ESTÁ CADASTRADO NO BANCO DE DADOS ANTES DE ENVIAR
$email = $_POST['email'];

$pdo = new PDO("mysql:host=localhost; dbname=LPTI", "root", "root");
$stm = $pdo->prepare("SELECT * FROM Usuario where email='$email' ");
$stm->execute();
$nlinhas = $stm->rowCount();
if ($nlinhas != 0) {
//Caso o dado já esteja cadastrado
    echo "<script>alert('Este email já está sendo usado!');location.href='cadastro.php'</script>";
}
//Caso NÃO esteja cadastrado
else {
    // pega os dados do formulário
    $nome = isset($_POST['first_name']) ? $_POST['first_name'] : null;
    $sobrenome = isset($_POST['last_name']) ? $_POST['last_name'] : null;
    $senha = isset($_POST['password_confirmation']) ? $_POST['password_confirmation'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $matricula = isset($_POST['matricula']) ? $_POST['matricula'] : null;
    $nome = utf8_decode($nome);
    $sobrenome = utf8_decode($sobrenome);
    $email = utf8_decode($email);
    $atividade = 0;
    if ($matricula % 2 == 0) {
        $tipo = 1;
    } else if ($matricula % 2 != 0) {
        $tipo = 2;
    }
    $usuario = new Usuario($nome, $sobrenome, $senha, $email, $matricula, $tipo, $atividade);

    // insere no BD
    // $PDO = db_connect();
    $sql = "INSERT INTO Usuario(nome,sobrenome, senha, email,identificacao, TipoUsuario_idTipoUsuario,Atividade) VALUES(:nome, :sobrenome, :senha, :email, :matricula, :tipo, :atividade)";
    $stmt = $pdo->prepare($sql);
    @$stmt->bindParam(':nome', $usuario->getNome());
    @$stmt->bindParam(':sobrenome', $usuario->getSobrenome());
    @$stmt->bindParam(':senha', $usuario->getSenha());
    @$stmt->bindParam(':email', $usuario->getEmail());
    @$stmt->bindParam(':matricula', $usuario->getIdentificacao());
    @$stmt->bindParam(':tipo', $usuario->getTipo());
    @$stmt->bindParam(':atividade', $usuario->getAtividade());

    if ($stmt->execute()) {
        echo "<script>alert('Cadastro realizado com sucesso');location.href='login.php'</script>";
    } else {
        echo "Erro ao cadastrar!!";
        print_r($stmt->errorInfo());
    }
}
?>
