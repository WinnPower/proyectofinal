<?php 
	function conectar(){
	$usuario="root";
	$clave="";
	$servidor="localhost";
	$db="datos";
	$con=mysql_connect($servidor,$usuario,$clave) or die("Error al conectar la base de datos "."Error ".mysql_error());
	mysql_select_db($db,$con);
	return $con;
	}
?>