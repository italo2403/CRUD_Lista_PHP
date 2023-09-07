<?php
include_once ("conexao.php");
$nome = $_POST['nome'];
$mesSelecionado = $_POST["mes"];

echo "Nome: $nome, Mês: $mesSelecionado"; // Adicione esta linha para depuração

$sql = "INSERT INTO tes(nome) VALUES ('$nome')";

if (mysqli_query($conexao, $sql)) {
    header("location: index.php");
} else {
    echo "Erro ao inserir o nome: " . mysqli_connect_error($conexao);
}

$sql2 = "INSERT INTO meses (mes_insercao) VALUES ('$mesSelecionado')";

if (mysqli_query($conexao, $sql2)) {
    echo "Mês inserido com sucesso!";
} else {
    echo "Erro ao inserir o mês: " . mysqli_connect_error($conexao);
}

mysqli_close($conexao);

?>