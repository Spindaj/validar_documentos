<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .form-container h2 {
            margin-bottom: 20px;
        }
        .form-container label {
            display: block;
            margin: 10px 0 5px;
        }
        .form-container input[type="text"],
        .form-container input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container input[type="submit"] {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            background-color: #28a745;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
    <title>Cadastro Cliente</title>
</head>
<body>
    <h3>VALIDAÇÃO DO CPF</h3>

    <div class="form-container">
    <h2>Cadastro de Cliente</h2>
    <form action="" method="POST">
        <label for="razao">Razão Social:</label>
        <input type="text" id="razao" name="razao" required>
        <br>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>

        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" required>
        <br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required>
        <br>

        <label for="rg">RG:</label>
        <input type="text" id="rg" name="rg" required>
        <br>

        <label for="contato">Contato:</label>
        <input type="text" id="contato" name="contato" required>
        <br>

        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>
    </div>

    <br>
    <?php
        require "validar.php";

        if(isset($_POST["cadastrar"])){
            $cpf = $_POST["cpf"];
        
            if(validaCPF($cpf)){
                echo "<center>CPF é válido!</center>";
            } else {
                echo "<center>CPF é inválido!</center>";
            }
        }
    ?>
</body>
</html>