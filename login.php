<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>
<fieldset style="width: 400px">
	<legend> DATOS DE INGRESO </legend>
	<form action="validaUsuario.php" method="post">
	<table width="400px" border="0">
		<tr>
			<td width="150">CORREO:</td>
			<td><input name="correo" type="email" required placeholder="usuario@servidorcorreo"></td>
			<td width="150">&nbsp;</td>
		</tr>	
		<tr>
			<td>CLAVE:</td>
			<td><input name="clave" type="password" required></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><p><a href="Recuperar.php">¿Olvidaste tu clave?</a></p></td>
			<td><input type="submit" name="validar" value="Ingresar"/></td>
			<td><p><a href="Registro.php">Registrate</a></p></td>
		</tr>
	</table>
	</form>	
</fieldset>	
<body>
</body>
</html>