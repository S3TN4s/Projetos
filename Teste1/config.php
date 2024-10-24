


<?php

    $dbHost = '193.203.175.140';
    $dbUsername = 'u776164156_spection';
    $dbPassword = 'Spection24';
    $dbName = 'u776164156_spection';


    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexao bem sucedida!";
    }
/*
// Configurações de conexão com o banco de dados
$host = "193.203.175.140";  // Endereço do servidor MySQL (normalmente "localhost")
$user = "u776164156_spection"; // Nome de usuário do MySQL
$password = "Spection24"; // Senha do MySQL
$database = "u776164156_spection"; // Nome do banco de dados

// Cria a conexão com o banco de dados
$conn = new mysqli($host, $user, $password, $database);

// Verifica se houve erro de conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verifica se o método de envio é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados enviados via POST
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Protege contra injeção de SQL
    $username = $conn->real_escape_string($username);
    $password = password_hash($conn->real_escape_string($password), PASSWORD_DEFAULT); // Hash da senha

    // Insere os dados no banco de dados
    $sql = "INSERT INTO Login (username, senha) VALUES ('$Usuario', '$Senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
}

// Fecha a conexão
$conn->close();
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .mensagem {
            text-align: center;
            margin-bottom: 10px;
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Cadastro de Usuário</h2>

        <!-- Formulário de cadastro -->
        <form method="POST" action="processa_cadastro.php">
            <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
*/