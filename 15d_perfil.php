<?php

// Inicia a sessão
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: 15d_logout.php");
    exit();
}

// Pega a cor escolhida
// Se não existir uma cor, usa branco
$corFundo = $_SESSION['cor'] ?? '#FFFFFF';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Página de Perfil</title>
</head>
<body style="background-color: <?php echo $corFundo; ?>;">
    <h2>
        Bem-vindo, <?php echo $_SESSION['usuario']; ?>
    </h2>
    <p>
        Esta é uma página restrita, apenas para
        <strong>Santistas ⚪⚫</strong>
    </p>
    <a href="15d_logout.php">Logout</a>
</body>
