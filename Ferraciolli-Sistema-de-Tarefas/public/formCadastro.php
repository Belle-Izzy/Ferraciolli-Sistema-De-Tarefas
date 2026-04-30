<!DOCTYPE html>
<html lang="Pt-br">
<head>

    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro de Usuário</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oregano:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@400..700&display=swap" rel="stylesheet">

</head>
<body class="body1">
    <div class="central">
    <h1>Cadastro de Usuário</h1>

    <form action="../actions/cadastro.php" method="post">
        <input type="text" name="nome" placeholder="Nome de Usuário"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="password" name="senha" placeholder="Senha"><br><br>
        <input type="submit" value="Cadastrar" class="b1"><br><br>
    </form>

    <p>Já tem uma Conta? Faça Login:</p><a href="formLogin.php"><button class="b2">Login</button></a>
    </div>
</body>
</html>