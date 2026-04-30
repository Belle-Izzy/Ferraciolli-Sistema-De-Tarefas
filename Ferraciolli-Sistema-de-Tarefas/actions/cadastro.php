<?php
session_start();

require "../includes/functions.php";

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $nome = limparDados($_POST['nome']);
    $email = limparDados($_POST['email']);
    $senha = limparDados($_POST['senha']);

    if(!isset($nome) || !isset($senha) || !isset($email) || empty($nome) || empty($senha) || empty($email)){
        $_SESSION['erro-form'] = "Preencha todos os dados.";
        header("Location: ../public/formCadastro.php");
        exit;
    }

    $nomeArquivo = "../dados/usuarios.json";
    $usuarios = lerDados($nomeArquivo);

    $novoUsuario = [
        "nome" => $nome,
        "email" => $email,
        'senha' => password_hash($senha, PASSWORD_DEFAULT)
    ];

    $usuarios[] = $novoUsuario;
    salvarDados($nomeArquivo, $usuarios);

    $_SESSION["usuario-cadastrado"] = "Usuário cadastrado com sucesso!";
    header("Location: ../public/formLogin.php");
    exit;

}else{
    $_SESSION["form-invalido"] = "Formulário inválido, recarregue a página";
    header("Location: ../public/formCadastro.php");
    exit;
}