<?php
$servidor="localhost";
$usuario="root";
$clave="";
$base="Comentarios";
@$conn=new mysqli($servidor,$usuario,$clave,$base);
if($conn->connect_error){
	die("error en la conexion ");
}

?>