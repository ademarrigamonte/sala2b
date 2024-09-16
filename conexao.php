<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

// Criar conexão
$conexao = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>
