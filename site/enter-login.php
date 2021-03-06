<?php

// Inclui o arquivo com o sistema de segurança
require_once("seguranca.php");
// Verifica se um formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Salva duas variáveis com o que foi digitado no formulário
    // Detalhe: faz uma verificação com isset() pra saber se o campo foi preenchido
    $email = (isset($_POST['email'])) ? $_POST['email'] : '';
    $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
    // Utiliza uma função criada no seguranca.php pra validar os dados digitados
    if (validaEmail($email, $senha) == true) {
        // O usuário e a senha digitados foram validados, manda pra página interna
        echo $_SESSION['emailTipo'];
        //Verifica se o usuário é administrador ou comum
        if ($_SESSION['emailAtividade'] == 0) {
            if ($_SESSION['emailTipo'] == 1) {
                header("Location:admin/inicio.php");
            } else if ($_SESSION['emailTipo'] == 2) {
                header("Location:aluno/inicio.php");
            }
        } else {
            // O usuário e/ou a senha são inválidos, manda de volta pro form de login
            // Para alterar o endereço da página de login, verifique o arquivo seguranca.php
            expulsaVisitante();
            header("Location:error.html");
        }
    }
}
