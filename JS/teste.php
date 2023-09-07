<?php
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<body>

<nav>
    <ul>
    <a href="index.php">Home</a>
    <a href="teste.php">Painel</a>
    <a href="buscando.php">Selecionar</a>
    </ul>
</nav>

    <h1>Valores Iniciais</h1>
    <table border="1">
        <tr>
            <th>Identificador</th>
            <th>Nome</th>
            <th>Mês de Entrada</th>
        </tr>
        <?php
        $sql = "SELECT t.id_tes, t.nome, m.mes_insercao
                FROM tes AS t
                INNER JOIN meses AS m
                ON t.id_tes = m.id";

        $busca = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_assoc($busca)) {
            echo "<tr>";
            echo "<td>" . $linha['id_tes'] . "</td>";
            echo "<td>" . $linha['nome'] . "</td>";
            echo "<td>" . $linha['mes_insercao'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <button class="btn" onclick="window.print()">Imprimir</button>
    
</body>
</html>
