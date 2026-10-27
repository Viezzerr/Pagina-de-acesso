<?php
session_start();

// Encerra a sessão
session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Logout</title>
</head>

<body>

    <h1>Obrigado pelo acesso!</h1>
    <p>
        Caso queira acessar novamente clique aqui:
    </p>
    <a href="15d_login.php">Voltar à página inicial</a>
</body>
</html>