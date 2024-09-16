<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
    header('Location: index.php'); // Redireciona para a página de login se não estiver logado
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<body>
    <h1>Bem-vindo ao sistema, <?php echo $_SESSION['email']; ?>!</h1>
    <p><a href="logout.php">Sair</a></p>
</body>
</html>
