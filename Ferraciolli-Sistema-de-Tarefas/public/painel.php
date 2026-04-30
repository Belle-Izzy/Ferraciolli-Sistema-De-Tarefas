<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: formLogin.php");
    exit;
}

require "../includes/functions.php";
$tarefas = lerDados("../dados/tarefas.json");
?>

<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oregano:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@400..700&display=swap" rel="stylesheet">

</head>
<body>
    <a class="a-img" href="../index.php"><img src="../includes/icon-voltar.png" alt=""></a>
    <div class="central">
    <h1>Lista de Tarefas</h1>

    <ul>
        <?php
        foreach($tarefas as $t){
            if($t['email_usuario'] === $_SESSION["usuario"]["email"]){
            ?>
                <li>
                    <strong><?= $t["titulo"] ?></strong>
                    <li class="descricao"><?= $t["descricao"] ?></li>
                </li>
            <?php
            }
        }
             ?>
    </ul><br>
        <a href="formTarefas.php"><button class="b2">Cadastrar Tarefa</button></a><br>
    </div>
</body>
</html>