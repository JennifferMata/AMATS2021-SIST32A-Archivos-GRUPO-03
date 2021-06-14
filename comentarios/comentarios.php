<?php
	require_once ("cn.php");
?>

<?php
	$sqlConsulta= "SELECT * FROM coments";
?>

<?php
	mysql_query ($sqlConsulta);
?>

<?php
	$datos = mysql_query ($sqlConsulta);
?>

<?php
//Validamos que hayan llegado estas variables, y que no esten vacias:
if (isset($_POST["ok"])){
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$mensaje = $_POST["comentario"];

//Preparamos la orden SQL
$consulta = "INSERT INTO coments
(id,nombre,email,comentario) VALUES ('0','$nombre','$email','$comentario')";

//Aqui ejecutaremos esa orden
if (mysql_query($consulta) ){
	echo "<p>Registro agregado.</p>";
} else {
	echo "<p>No se agregó...</p>";
}

	
}

?>

