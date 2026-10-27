<?php
session_start(); // Deve ser chamado antes de qualquer código HTML

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Recebe os valores enviados pelo formulário
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $cor = $_POST['cor'];

    // Conecta ao banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "Senai@118";
    $dbname = "exercicio";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Consulta o usuário no BD
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
    $result = $conn->query($sql);

    // Verifica se encontrou o usuário
    if ($result->num_rows > 0) {

        // Salva o usuário e a cor escolhida na sessão
        $_SESSION['usuario'] = $usuario;
        $_SESSION['cor'] = $cor;

        // Vai para a página de perfil
        header("Location: 15d_perfil.php");
        exit();

    } else {
        $erro = "Usuário ou senha incorretos!";
    }

    // Fecha a conexão
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>

    <form method="post" action="">

        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <br><br>

        <label for="cor">Selecione uma cor:</label>

        <select name="cor" id="cor" onchange="mudarCor()">
            <option value="#FFFFFF">Branco</option>
            <option value="#008000">Verde</option>
            <option value="#FFFF00">Amarelo</option>
            <option value="#87CEEB">Azul</option>
        </select>

        <br><br>

        <button type="submit">Entrar</button>

    </form>

    <?php
    if (isset($erro)) {
        echo "<p style='color: red;'>$erro</p>";
    }
    ?>

    <script>
        function mudarCor() {
            let cor = document.getElementById("cor").value;

            document.body.style.backgroundColor = cor;
        }
    </script>

</body>
</html>