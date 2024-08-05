<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro Cliente</title>
</head>
<body>
    <center><h1>CADASTRO DE CLIENTE</h1></center>

    <div class="form-container">
    <h2>Cadastro de Cliente</h2>
    <form action="" method="POST">

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

        <center><input type="submit" name="cadastrar" value="Cadastrar"></center>
    </form>
    </div>

    <br>
    <?php
        require "validar.php";
        require "conexao.php";

        if(isset($_POST["cadastrar"])){
            $nome = $_POST["nome"];
            $cidade = $_POST["cidade"];
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];
            $rg = $_POST["rg"];
            $contato = $_POST["contato"];
            
            $sql="INSERT INTO tbclientes(CPF, idcliente, nome, cidade, email, RG, contato)";
            $sql.=" VALUES('$cpf', null, '$nome', '$cidade', '$email', '$rg', '$contato')" or die(mysqli_error($conexao));
            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        
            if(validaCPF($cpf)){
                echo "<center>CPF é válido!</center>";
            } else {
                echo "<center>CPF é inválido!</center>";
            }
        }
    ?>
    <br>
    <br>
    <center><a href="menu.php">voltar</a></center>
</body>
</html>