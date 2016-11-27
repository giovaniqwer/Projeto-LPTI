<?php
  session_start();
  require_once 'conexao.php';
  require_once 'disciplina-class.php';

  $Tamanho_max = 100000;
  //Lógica de Inserção
  $dadosOK = true;
  echo $_FILES['arquivo']['name'];
  $arquivo = $_FILES['arquivo'];
  if($arquivo['error'] != 0){
    $dadosOK = false;
    echo "Erro no upload do arquivo! <br>";
  }else if($arquivo['size'] > $Tamanho_max){
    echo "Arquivo muito grande! <br>";
    $dadosOK = false;
  }else{
    $file_src = '../uploads/'.$_FILES['arquivo']['name'];
    if(!move_uploaded_file($_FILES['arquivo']['tmp_name'], $file_src)){
      echo "Erro ao mover arquivo <br>";
      $dadosOK = false;
  }
  if($dadosOK){
    $mysqlfile = addslashes(fread(fopen($file_src, "rb"),$arquivo['size']));
    $disciplina = new Disciplina($_POST['editNomeDisciplina'],$_POST['editCredito'], $_POST['tipo'], $_POST['periodo'], $mysqlfile);
    $MySQL = new MySQL;

    try{
      $MySQL->inserirDisciplina($disciplina->getEmenta(),$disciplina->getNome(),$disciplina->getCreditos(),$disciplina->getPeriodo(),$disciplina->getTipo());
      echo "Dados gravados com sucesso <br>";
    }catch (Exception $e){
      echo "Erro ao inserir: ". $e->getMessage() . "<br>";
    }
  }*/

/*
session_start();
require_once '../init.php';
include_once 'disciplina-class.php';

// pega os dados do formulário

$nome= isset($_POST['editNomeDisciplina']) ? $_POST['editNomeDisciplina'] : null;
$creditos= isset($_POST['editCredito']) ? $_POST['editCredito'] : null;
$periodo = isset($_POST['periodo']) ? $_POST['periodo'] : null;
$ementa = isset($_FILES['arquivo']) ? $FILES_['arquivo'] : null;
$curso = 1;
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : null;

$materia = new Disciplina($ementa, $nome, $creditos, $curso, $periodo,$tipo);


$uploaddir = '../uploads/';
$uploadfile = $uploaddir . basename($ementa['name']);
echo $ementa['name'];

if (move_uploaded_file($_FILES["arquivo"]["name"], $uploaddir)) {
    echo "Arquivo válido e enviado com sucesso.\n";
} else {
    echo "Falha no envio!\n";
}


// insere no BD
$PDO = db_connect();
$sql = "INSERT INTO Disciplina(ementa, nome, creditos, Curso_idCurso,periodo, tipo) VALUES(:ementa, :nome, :creditos, :curso, :periodo, :tipo)";
$stmt = $PDO->prepare($sql);
@$stmt->bindParam(':ementa', $materia->getEmenta());
@$stmt->bindParam(':nome', $materia->getNome());
@$stmt->bindParam(':creditos', $materia->getCreditos());
@$stmt->bindParam(':curso', $materia->getCurso());
@$stmt->bindParam(':periodo', $materia->getPeriodo());
@$stmt->bindParam(':tipo', $materia->getTipo());


if ($stmt->execute()) {
    echo "Adicionado com sucesso!";
} else {

    echo "Erro ao cadastrar Disciplina!!";
    print_r($stmt->errorInfo());
}*/
?>
