<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "pet";
$usuario = $_POST ["nmUSER"];
$senha = $_POST ["nmSENHA"];

$c = mysqli_connect("$host","$user","$pass") or mysql(error());

mysqli_select_db($c,$banco);

$query = "insert into login values (0,'$usuario','$senha')";

mysqli_query($c, $query) or die (mysql_error());

header('Location://localhost/trabalho/cadastro_Y.php');

?>