<?php
$host = "localhost";
$usuario = "admin";
$senha = "admin";
$baseData = "pet";

$conexao = mysqli_connect("$host","$usuario","$senha");
	if ($conexao){ 
		$dbase = mysqli_select_db($conexao, $baseData);
			if ($dbase) {
				header('Location://localhost/petsLog/home.php');
			}
			else {
				header('Location://localhost/petsLog/falha_Banco.php');
			}
	}

	else
	{
		header('Location://localhost/petsLog/falha_sgbd.php');	
	}
?>