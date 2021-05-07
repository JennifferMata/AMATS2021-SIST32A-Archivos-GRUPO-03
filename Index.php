<!DOCTYPE html>
<html>
<head>
	<title>Laboratoio2</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/style.css">

<ul class="menu">
	<li><a href="Index.php" >INICIO</a></li>
	<li><a href="Dui.php">EJERCICIO3</a></li>
	<li><a href="encuesta.php">EJERCICIO4</a></li>
</ul>
<?php 
	$archivo_almacen = "contadordevisitas.txt";
	$abrirarchivo = fopen($archivo_almacen, "r");
	$cuenta = fread($abrirarchivo, filesize($archivo_almacen));
	fclose($abrirarchivo);
	$abrirarchivo = fopen($archivo_almacen, "w");
	$cuenta = $cuenta + 1;
	$reescribir = fwrite($abrirarchivo, $cuenta);
	fclose($abrirarchivo);
	echo "<p>Este sitio ha sido visitado"." ".$cuenta." "."veces."."</p>";
?>

<h1>Laboratorio 2</h1><br>

<h2>INTEGRANTES:<br>
Arevalo Molina Manuel Alberto  <br>
Rivas Mancia Romeo Adonay <br>
Mata Cáceres Jenniffer Lilliana<br>
Guzmán Paiz Luis Alejandro<br>
Campos García Kevin Orlando
</h2>
</body>
</html>