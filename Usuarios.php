<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	require "datos/conex.php";
	$sql ="select * from usuarios";
	$r=mysqli_query($l,$sql);
	print "Existen " .mysqli_num_rows($r). " usuarios <br/>";
	print ("<table border='1'>");
		print("<tr>");
	
		  print("<th>Correo</th>");	
		  print("<th>Rol</th>");	
		print("</tr>");
	while($registro=mysqli_fetch_object($r)){
		
		print("<tr>");
		 print ("<td>$registro->cor_usu</td>");
		 print ("<td>$registro->rol_usu</td>");
	}
	print ("</table>");
	 print ("<td>"."<p><a href='login.php'>Regresar</a></p>"."</td>");
?>	
</body>
</html>