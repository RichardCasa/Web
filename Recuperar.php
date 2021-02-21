<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<fieldset style="width: 400px">
	<legend> Recuperar contraseña </legend>
	<form action="capturar.php" method="post">
	<table width="400px" border="0">
		<tr>
			<td width="150">Ingrese el correo:</td>
			<td><input name="Rcorreo" type="email" required placeholder="usuario@servidorcorreo"></td>
			<td width="150">&nbsp;</td>
		</tr>	
		<tr>
			<td>Ingrese la nueva clave:</td>
			<td><input name="Rclave" type="password" required></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><input type="submit" name="validar" value="Ingresar"/></td>
			<td><p><a href="login.php">Regresar</a></p></td>
		</tr>
	</table>
	</form>	
</fieldset>	
<body>
</body>
</html>