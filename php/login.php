<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "pet";
$usuario = $_POST ["nmUSER"];
$senha = $_POST ["nmSENHA"];
$entar = $_POST ["nmVALIDAR"];
$connect = mysqli_connect("$host","$user","$pass");
	mysqli_select_db($connect,$banco);
		if (isset($entar)) {
			$verifica = "select * from login where nome = '$usuario' and pass = '$senha'";
			$resut=mysqli_query($connect,$verifica) or die("erro ao selecionar");
				if (mysqli_num_rows($resut)<=0) {
					header('Location://localhost/petsLog/cadastro_N.php');
					}
				
				else{
					setcookie("login", $usuario);
					header('Location://localhost/petsLog/home.html');
					}
		}
?>