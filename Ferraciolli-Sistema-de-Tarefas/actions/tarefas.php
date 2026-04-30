<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: public/formLogin.php");
    exit;
}

require "../includes/functions.php";

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $titulo = limparDados($_POST['titulo']);
    $descricao = limparDados($_POST['descricao']);

    if(!isset($titulo) || !isset($descricao) || empty($titulo) || empty($descricao)){
        $_SESSION['erro-form'] = "Preencha todos os dados.";
        header("Location: ../public/formTarefas.php");
        exit;
    }

    $nomeArquivo = "../dados/tarefas.json";
    $tarefas = lerDados($nomeArquivo);

    $nova = [
        "id_tarefa" => count($tarefas) + 1,
        "email_usuario" => $_SESSION['usuario']["email"],
        'titulo' => $titulo,
        'descricao' => $descricao
    ];

    $tarefas[] = $nova;
    salvarDados($nomeArquivo, $tarefas);

    $_SESSION["tarefa-cadastrada"] = "Tarefa cadastrada com sucesso!";
    header("Location: ../public/painel.php");
    exit;

}else{
    $_SESSION["form-invalido"] = "Formulário inválido, recarregue a página";
    header("Location: ../public/formTarefas.php");
    exit;
}