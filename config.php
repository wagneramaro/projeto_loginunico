<?php 

try {
	$pdo = new PDO("mysql:dbname=projeto_loginunico;host=localhost", "root", "");
} catch(PDOExeption $e){
	echo "Erro: ".$e->getMenssage();
	exit;
} 

?>