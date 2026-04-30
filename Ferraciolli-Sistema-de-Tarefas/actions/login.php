<?php
session_start();
require "../includes/functions.php";
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $email = limparDados($_POST['email']);
    $senha = limparDados($_POST['senha']);

    if(!isset($senha) || !isset($email) || empty($senha) || empty($email)){
        $_SESSION['erro-form'] = "Preencha todos os dados.";
        header("Location: ../public/formLogin.php");
        exit;
    }

    $nomeArquivo = "../dados/usuarios.json";
    $usuarios = lerDados($nomeArquivo);

    foreach($usuarios as $u){
        if($u["email"] === $email && password_verify($senha, $u["senha"])){
            $_SESSION['usuario'] = [
                "nome" => $u["nome"],
                "email" => $u["email"]
            ];
            header("Location: ../public/formTarefas.php");
            exit;
        }
    }

}else{
    $_SESSION["form-invalido"] = "Formulário inválido, recarregue a página";
    header("Location: ../public/formLogin.php");
    exit;
}