<?php
$servidor ="localhost"; //Máquina Local
$usuario = "root"; //Usuário Padrão
$senha = ""; //Se o Workbench tiver senha ou PHPMyADMIN
$dbname="teste"; //Nome do Banco

$conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conexao){
 die("Houve um erro: ".mysqli_connect_error());
}


?>