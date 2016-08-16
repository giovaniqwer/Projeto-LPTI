<?php
 require_once 'init.php';
 include_once 'cadastro-class.php';

 //INICIO ALTERAÇÃO GIOVANI
//CONFERE SE O E-MAIL JÁ ESTÁ CADASTRADO NO BANCO DE DADOS ANTES DE ENVIAR

$email = $_POST['email'];
$pdo = new PDO("mysql:host=localhost; dbname=LPTI", "root", "root");
$stm = $pdo->prepare("SELECT * FROM Usuario where email='$email' ");
$stm->execute();
$nlinhas= $stm->rowCount();
if ($nlinhas!=0){
//Caso o dado já esteja cadastrado
echo "<script>alert('Este email já está sendo usado!');location.href='cadastro.php'</script>";
//echo "<script>javascript:history.go(-2);</script>";
}
//Caso NÃO esteja cadastrado
else{
  //FIM ALTERAÇÃO GIOVANI


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
   echo "<script>alert('Cadastro realizado com sucesso');location.href='login.php'</script>";
 }else{
    echo "Erro ao cadastrar!!";
    print_r($stmt->errorInfo());
 }}
?>

