<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }

    .error-message {
      color: red;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <?php
    if (isset($_GET['erro'])) {
        echo '<p class="error-message">Usuário ou senha inválidos!</p>';
    }
    ?>
    <form action="senhaSistem.php" method="POST">
      <label for="email">Usuário</label>
      <input type="text" id="email" name="email" required>

      <label for="senha">Senha</label>
      <input type="password" id="senha" name="senha" required>

      <button type="submit">Entrar</button>
    </form>
  </div>
</body>
</html>
