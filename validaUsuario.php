<?php
require "datos/conex.php";
if(isset($_POST["correo"]) && isset($_POST["clave"])){
	$user = $_POST["correo"];
	$pass = $_POST["clave"];
	if($user=="" || $pass==""){
		print("Debe ingresar los datos requeridos");
	}else{
		$sql = "select * from usuarios where cor_usu='$user' and cla_usu='$pass'";
		$r = mysqli_query($l,$sql);
		$n = mysqli_num_rows($r);
		if($n==1){
			$registro = mysqli_fetch_object($r);
			$rol = $registro->rol_usu;
			if($rol == 'Administrador'){
				print("Bienvenido Administrador");
				header("location:CRUDadm.php");
			}else{
				print("Bienvenido comun");
				header("location:CRUD.php");	
				
				
			}
		}else{
			print("Los datos son incorrectos");
		}
	}
}
?>