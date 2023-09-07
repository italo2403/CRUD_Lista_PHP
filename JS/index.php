<?php
	include("conexao.php");
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



<form action="cadastro.php"  method="post">
<h1>Cadastrar</h1>
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
    
    <label for="mes">Escolha um mês:</label>
<select id="mes" name="mes">
    <option value="01">Janeiro</option>
    <option value="02">Fevereiro</option>
    <option value="03">Março</option>
    <option value="04">Abril</option>
    <option value="05">Maio</option>
    <option value="06">Junho</option>
    <option value="07">Julho</option>
    <option value="08">Agosto</option>
    <option value="09">Setembro</option>
    <option value="10">Outubro</option>
    <option value="11">Novembro</option>
    <option value="12">Dezembro</option>
</select>
    <input type="submit" id="enviar" value="Enviar">
</form>
 
   
   




    <script src="./assets/js/script.js"></script>
</body>
</html>