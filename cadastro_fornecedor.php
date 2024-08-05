<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Cadastro Fornecedor</title>
</head>
<body>
    <center><h1>CADASTRO DE FORNECEDOR</h1></center>

    <div class="form-container">
    <h2>Cadastro de Cliente</h2>
    <form action="" method="POST">
        <label for="razao">Razão Social:</label>
        <input type="text" id="razao" name="razao" required>
        <br>

        <label for="nome">Nome Fantasia:</label>
        <input type="text" id="nome" name="nome" required>
        <br>

        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" required>
        <br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="cnpj">CNPJ:</label>
        <input type="text" id="cnpj" name="cnpj" required>
        <br>

        <label for="rg">RG:</label>
        <input type="text" id="rg" name="rg" required>
        <br>

        <label for="inscricaoEst">Inscrição Estadual:</label>
        <input type="text" id="inscricaoEst" name="inscricaoEst" required>
        <br>

        <label for="contato">Contato:</label>
        <input type="text" id="contato" name="contato" required>
        <br>

        <center><input type="submit" name="cadastrar" value="Cadastrar"></center>
    </form>
    </div>

    <br>
    <?php
        require "conexao.php";
        require "validar.php";

        if(isset($_POST["cadastrar"])){
            $razao = $_POST["razao"];
            $nomeF = $_POST["nome"];
            $cidade = $_POST["cidade"];
            $email = $_POST["email"];
            $cnpj = $_POST["cnpj"];
            $rg = $_POST["rg"];
            $inscricao = $_POST["inscricaoEst"];
            $contato = $_POST["contato"];
            
            $sql="INSERT INTO tbfornecedores(idfornecedor, razao, nome, cidade, email, CNPJ, RG, inscricao, contato)";
            $sql.=" VALUES(null, '$razao', '$nomeF', '$cidade', '$email', '$cnpj', '$rg', '$inscricao', '$contato')" or die(mysqli_error($conexao));
            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

            if(validarCNPJ($cnpj)){
                echo "<center>CNPJ é válido!</center>";
            } else {
                echo "<center>CNPJ é inválido!</center>";
            }
        }
    ?>
    <br>
    <br>
    <center><a href="menu.php">voltar</a></center>
</body>
</html>

