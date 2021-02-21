<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
	require "datos/conex.php";
	if(isset($_POST["correo"]) && isset($_POST["clave"])){
	$correo=$_POST["correo"];
	$clave=$_POST["clave"];	
	$rol=$_POST["rol"];
	$sql = "Insert into usuarios(cor_usu,cla_usu,rol_usu) values ('$correo',$clave,'$rol')";
	$r = mysqli_query($l,$sql) or die ("ERROR ");
	header("location:login.php");
	}else
	{
		if(isset($_POST["nombreP"]) && isset($_POST["stockP"]) && isset($_POST["precioP"]) && isset($_POST["categoriaP"])){
		$nomP=$_POST["nombreP"];
		$stP=$_POST["stockP"];
		$preP=$_POST["precioP"];
		$caP=$_POST["categoriaP"];
		$sql = "Insert into producto (nombre_pro,sto_pro,pvp_pro,cod_cat) values ('$nomP',$stP,$preP,$caP)";
		$r=mysqli_query($l,$sql) or die ("ERROR AL ACTUALIZAR LOS PRODUCTOS");
		header("location:CRUDadm.php");	
	}else{
	$rclave=$_POST["Rclave"];
	$rcorreo=$_POST["Rcorreo"];
	$sql ="update usuarios set cla_usu=($rclave) where cor_usu='$rcorreo'";
	$r=mysqli_query($l,$sql) or die ("ERROR AL ACTUALIZAR LOS PRODUCTOS");
	header("location:login.php");
	}
	}
?>
<body>
</body>
</html>