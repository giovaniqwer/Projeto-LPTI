<?php
    class MySQL{
        var $host="localhost";
        var $user="root";
        var $password="root";
        var $database="LPTI";
        var $link;
        var $query;
        var $result;

        function connect(){
            $this->link = mysql_connect($this->host,$this->user,$this->password);
            if(!$this->link){
              echo "Falha na conexão!!!<br>";
              echo "Erro ".mysql_error();
              die();
            }else if(!mysql_select_db($this->database,$this->link)){
              echo "O BD não pode ser aberto!!!<br>";
              echo "Erro: ".mysql_error();
              die();
            }
        }
        function disconnect(){
          return mysql_close($this->link);
        }
        function executeQuery($query){
          $this->connect();
          $this->query = $query;
          if($this->result=mysql_query($this->query)){
            $this->disconnect();
            return $this->result;
          }else{
            echo "Ocorreu um erro ".mysql_error();
            die();
            disconnect();
          }
        }
        function inserirDisciplina($ementa, $nome_ementa, $nome, $creditos, $curso, $periodo, $tipo){
          $sqlAluno = "INSERT INTO Disciplina(ementa, nomeEmenta, nome, creditos, Curso_idCurso, periodo, tipo) VALUES ('$ementa', '$nome_ementa', '$nome','$creditos', '$periodo', '$periodo', '$tipo')";
          $this->executeQuery($sqlAluno);
        }
    }
?>
