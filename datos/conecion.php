<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	$usuario='root';
	$clave='';
	$servidor='localhost';
	$base='aw';
	//instruciones para conectarse al servidor 
	$l=mysqli_connect($servidor,$usuario,$clave) or die("Error al conectarse con el servidor");
	//selecione la bd 
	mysqli_select_db($l,$base) or die("Error al conectarse a la bd");
	mysqli_set_charset($l, 'utf8');
	//print("Conexion Exitosa");
?>	
</body>
</html>