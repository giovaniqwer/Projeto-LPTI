<?php
  session_start();
  require_once 'conexao.php';
  require_once 'disciplina-class.php';

  $Tamanho_max = 100000000;
  //Lógica de Inserção
  $dadosOK = true;
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
    $disciplina = new Disciplina($mysqlfile, $_FILES['arquivo']['name'], $_POST['editNomeDisciplina'],$_POST['editCredito'], '2', $_POST['periodo'], $_POST['tipo']);
    $MySQL = new MySQL;

    try{
      $MySQL->inserirDisciplina($disciplina->getEmenta(), $disciplina->getEmentaNome(), $disciplina->getNome(),$disciplina->getCreditos(), $disciplina->getCurso(), $disciplina->getPeriodo(),$disciplina->getTipo());
      echo "Dados gravados com sucesso <br>";
    }catch (Exception $e){
      echo "Erro ao inserir: ". $e->getMessage() . "<br>";
    }
  }}
?>

