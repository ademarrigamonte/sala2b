<?php
session_start();

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    include_once('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta ao banco de dados
    $sql = "SELECT * FROM clientes WHERE email='$email' AND senha='$senha'";
    $result = mysqli_query($conexao, $sql);

    // Verificar se a consulta foi bem-sucedida
    if ($result && mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
        exit();
    } else {
        // Limpa as sessões e redireciona de volta à tela de login
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: tela.php?erro=1'); // Passar erro como parâmetro
        exit();
    }
} else {
    // Redireciona para a tela de login caso os campos estejam vazios
    header('Location: tela.php');
    exit();
}
?>
