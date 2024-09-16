<?php
if (isset($_POST['submit'])) {
    // Inclua a conexão ao banco de dados
    include_once('conexao.php');

    // Atribuindo as variáveis com os valores corretos
    $nome = $_POST['nome'];
    $nascimento = $_POST['descricao']; // Nome do campo alterado para 'nascimento'
    $peso = $_POST['localizacao']; // Nome do campo alterado para 'peso'
    $altura = $_POST['avaliacao']; // Nome do campo alterado para 'altura'
    $nacionalidade = $_POST['nacio'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Inserindo os dados no banco de dados
    $sql = "INSERT INTO clientes(nome, nascimento, peso, altura, nacionalidade, sexo, email, senha) 
            VALUES ('$nome', '$nascimento', '$peso', '$altura', '$nacionalidade', '$sexo', '$email', '$senha')";
    
    if (mysqli_query($conexao, $sql)) {
        // Redireciona para outra página após o sucesso
        header('Location: tela.php');
        exit(); // Garanta que o script seja encerrado
    } else {
        echo "Erro: " . mysqli_error($conexao); // Exibe o erro do MySQL, se houver
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculdade Formiga</title>
    <link rel="shortcut icon" href="formiga.jpg" type="image/x-icon">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #000000;
        }

        header {
            background-color: #50742e;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        #formiga {
            width: 80px; /* Ajuste o tamanho conforme necessário */
        }

        h1 {
            margin: 0;
            font-size: 1.5em;
        }

        section {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .product {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 10px;
            padding: 15px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .product:hover {
            transform: scale(1.05);
        }

        h2 {
            color: #333;
        }

        p {
            color: #555;
        }

        #addProductForm {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        form input,
        form textarea,
        form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        form button {
            background-color: #333;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        footer {
            background-color: #50742e;
            color: #fff;
            text-align: center;
            padding: 1em;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <img id="formiga" src="formiga.jpg" alt="Logo do site que é uma formiga">
        <h1>Faculdade Formiga</h1>
    </header>

    <section>
        <div class="product">
            <h2>Fazer cadastro</h2>
            <form action="index.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="descricao">Nascimento:</label>
                <input type="date" id="descricao" name="descricao" required>

                <label for="localizacao">Peso:</label>
                <input type="number" id="localizacao" name="localizacao" required>

                <label for="avaliacao">Altura:</label>
                <input type="number" id="avaliacao" name="avaliacao" required>

                <label for="nacio">Nacionalidade:</label>
                <input type="text" id="nacio" name="nacio" required>

                <label for="sexo">Sexo:</label>
                <input type="text" id="sexo" name="sexo" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>

                <button name="submit" type="submit">Adicionar Produto</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Terra Boa - Faculdade Formiga</p>
    </footer>
</body>
</html>
