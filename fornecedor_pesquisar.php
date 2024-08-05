<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style3.css">
    <title>Pesquisar Fornecedor</title>
</head>
<body>
        <h1><center>PESQUISAR FORNECEDOR</center></h1>

        <?php
            require "conexao.php";
            $sql="SELECT tbfornecedores.idfornecedor, tbfornecedores.razao, 
            tbfornecedores.nome, tbfornecedores.cidade, tbfornecedores.email, tbfornecedores.CNPJ, tbfornecedores.RG, tbfornecedores.inscricao, tbfornecedores.contato
            FROM tbfornecedores ORDER BY idfornecedor";
            $resultado=mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<table align='center'>";
                echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Razão</th>";
                    echo "<th>Nome</th>";
                    echo "<th>Cidade</th>";
                    echo "<th>Email</th>";
                    echo "<th>CNPJ</th>";
                    echo "<th>RG</th>";
                    echo "<th>Inscrição</th>";
                    echo "<th>Contato</th>";
                echo "</tr>";
                while($linha=mysqli_fetch_array($resultado)) {
                    $idfornecedor             =   $linha["idfornecedor"];
                    $razao               =   $linha["razao"];
                    $nome                   =   $linha["nome"];
                    $cidade            =   $linha["cidade"];
                    $email    =   $linha["email"];
                    $cnpj = $linha["CNPJ"];
                    $rg = $linha["RG"];
                    $inscricao = $linha["inscricao"];
                    $contato = $linha["contato"];

                    echo "<tr>";
                        echo "<td align='right'>$idfornecedor</td>";
                        echo "<td align='left'>$razao</td>";
                        echo "<td align='left'>$nome</td>";
                        echo "<td align='right'>$cidade</td>";
                        echo "<td align='right'>$email</td>";                        
                        echo "<td align='right'>$cnpj</td>";
                        echo "<td align='right'>$rg</td>";
                        echo "<td align='right'>$inscricao</td>";
                        echo "<td align='right'>$contato</td>";
                    echo "<tr>";
                }
            echo "</table>";   
        ?>

    <center><a href="menu.php">voltar</a></center>
</body>
</html>