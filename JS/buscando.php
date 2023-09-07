<?php
include_once("conexao.php");

// Inicialize as variáveis de pesquisa
$palavraChave = "";
$mesSelecionado = "";
$resultados = array(); // Array para armazenar os resultados

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se a palavra-chave foi enviada antes de usá-la
    if (isset($_POST["palavra-chave"])) {
        $palavraChave = $_POST["palavra-chave"];
    }

    // Verifique se o número do mês foi enviado antes de usá-lo
    if (isset($_POST["mes"])) {
        $mesSelecionado = $_POST["mes"];
    }

    // Montar a consulta SQL com base nos parâmetros fornecidos
    $sql = "SELECT t.id_tes, t.nome, m.mes_insercao
            FROM tes AS t
            INNER JOIN meses AS m
            ON t.id_tes = m.id
            WHERE 1 ";

    if (!empty($palavraChave)) {
        $sql .= "AND t.nome LIKE '%$palavraChave%' ";
    }

    if (ctype_digit($mesSelecionado) && $mesSelecionado >= 1 && $mesSelecionado <= 12) {
        $sql .= "AND m.mes_insercao = '$mesSelecionado' ";
    }

    $busca = mysqli_query($conexao, $sql);

    // Armazenar os resultados em um array
    while ($linha = mysqli_fetch_assoc($busca)) {
        $resultados[] = $linha;
    }
}
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

    <form action="buscando.php" method="post">
        <label for="palavra-chave">Palavra-chave:</label>
        <input type="text" name="palavra-chave" id="palavra-chave">
        
        <label for="mes">Número do Mês:</label>
        <input type="text" name="mes" id="mes">
        
        <input type="submit" value="Pesquisar">
    </form>

    <?php
    // Exiba os resultados somente se houver algum
    if (!empty($resultados)) {
        echo "<h2>Resultados da Pesquisa:</h2>";
        echo "<table>";
        echo "<tr><th>Identificador</th><th>Nome</th><th>Mês de Entrada</th></tr>";
        foreach ($resultados as $resultado) {
            echo "<tr>";
            echo "<td>" . $resultado['id_tes'] . "</td>";
            echo "<td>" . $resultado['nome'] . "</td>";
            echo "<td>" . $resultado['mes_insercao'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

</body>
</html>
