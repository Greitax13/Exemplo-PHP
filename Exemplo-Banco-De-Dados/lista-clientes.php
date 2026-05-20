<?php
require_once "conexao.php";

$sql = "SELECT * FROM tb_clientes";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Clientes</title>

    <link rel="stylesheet" href="css/style2.css">
</head>
<body>

    <h1>Listagem de Clientes</h1>

    <div class="container">

        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>

            <?php foreach($clientes as $cliente){ ?>

                <tr>
                    <td><?= $cliente['nm_nome'] ?></td>
                    <td><?= $cliente['ds_endereco'] ?></td>
                    <td><?= $cliente['ds_email'] ?></td>
                    <td><?= $cliente['nr_telefone'] ?></td>
                </tr>

            <?php } ?>

        </table>
        
        <a href="index.html" class="btn">Voltar</a>

    </div>

</body>
</html>