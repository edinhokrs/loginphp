<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "users";

$conexao = new mysqli($host, $user, $pass, $dbname);
if($conexao->connect_error) {
	die("conexão falhou" . $conexao ->connect_error);
} else {
	echo"funcionou";
}

?>