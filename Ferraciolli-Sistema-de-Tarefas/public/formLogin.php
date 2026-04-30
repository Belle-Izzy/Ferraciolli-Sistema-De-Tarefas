<?php
session_start();
?>

<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oregano:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@400..700&display=swap" rel="stylesheet">

</head>
<body class="body1">
    <div class="central">

    
    <h1>Login</h1>

    <form action="../actions/login.php" method="post">
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="senha" placeholder="Senha"><br><br><br><br>
        <input type="submit" value="Entrar" class="b1"><br>
    </form>

    <a href="formCadastro.php"><button class="b2">Criar Conta</button></a>
    </div>
</body>
</html>