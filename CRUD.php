<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	require "datos/conex.php";
	$sql ="select * from docentes";
	$r=mysqli_query($l,$sql);
	print ("<table border='1'>");
		print("<tr>");
	
		  print("<th>Cedula</th>");	
		  print("<th>Nombre</th>");	
		  print("<th>Apellido</th>");	
		  print("<th>Correo</th>");	
		  print("<th>Clave</th>");		
		print("</tr>");
	while($registro=mysqli_fetch_object($r)){
		
		print("<tr>");
		 print ("<td>$registro->ced_do</td>");
		 print ("<td>$registro->nom_do</td>");
		 print ("<td>$registro->ape_do</td>");
		 print ("<td>$registro->correo_do</td>");
		 print ("<td>$registro->clave_do</td>");
		 print ("<td>"."<p><a href='Comprar.php'>Comprar</a></p>"."</td>");
	}
	print ("</table>");
	 print ("<td>"."<p><a href='login.php'>Regresar</a></p>"."</td>");
?>	
</body>
</html>