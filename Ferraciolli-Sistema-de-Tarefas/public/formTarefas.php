<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: formLogin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Tarefas</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oregano:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@400..700&display=swap" rel="stylesheet">

</head>
<body>
    <a class="a-img" href="../index.php"><img src="../includes/icon-voltar.png" alt=""></a>
    <div class="central">
   
    <h1>Tarefas</h1>

    <form action="../actions/tarefas.php" method="post">
        <input type="text" name="titulo" placeholder="Título"><br>
        <textarea name="descricao" placeholder="Descrição"></textarea><br>
        <input type="submit" value="Cadastrar Tarefa" class="b1"><br>
    </form>

    <a href="painel.php"><button class="b2">Listar Tarefas</button></a><br>
</div>
</body>
</html>