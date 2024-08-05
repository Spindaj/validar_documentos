<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style3.css">
    <title>Pesquisar Cliente</title>
</head>
<body>
        <h1><center>PESQUISAR CLIENTE</center></h1>

        <?php
            require "conexao.php";
            $sql="SELECT tbclientes.idcliente, tbclientes.nome, 
            tbclientes.cidade, tbclientes.email, tbclientes.CPF, tbclientes.RG, tbclientes.contato FROM tbclientes
            ORDER BY idcliente";
            $resultado=mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<table align='center'>";
                echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Nome</th>";
                    echo "<th>Cidade</th>";
                    echo "<th>Email</th>";
                    echo "<th>CPF</th>";
                    echo "<th>RG</th>";
                    echo "<th>contato</th>";
                echo "</tr>";
                while($linha=mysqli_fetch_array($resultado)) {
                    $idcliente             =   $linha["idcliente"];
                    $nome               =   $linha["nome"];
                    $cidade                   =   $linha["cidade"];
                    $email            =   $linha["email"];
                    $cpf    =   $linha["CPF"];
                    $rg = $linha["RG"];
                    $contato = $linha["contato"];

                    echo "<tr>";
                        echo "<td align='right'>$idcliente</td>";
                        echo "<td align='left'>$nome</td>";
                        echo "<td align='left'>$cidade</td>";
                        echo "<td align='right'>$email</td>";
                        echo "<td align='right'>$cpf</td>";                        
                        echo "<td align='right'>$rg</td>";
                        echo "<td align='right'>$contato</td>";
                    echo "<tr>";
                }
            echo "</table>";   
        ?>

                <center><a href="menu.php">voltar</a></center>
</body>
</html>