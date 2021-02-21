<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<title>Registro</title>
</head>
<fieldset style="width: 400px">
	<legend> REGISTRATE </legend>
	<form action="capturar.php" method="post">
	<table width="400px" border="0">
		<tr>
			<td width="150">INGRESA TU CORREO:</td>
			<td><input name="correo" type="email" required placeholder="usuario@servidorcorreo"></td>
			<td width="150">&nbsp;</td>
		</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>INGRESA TU CLAVE:</td>
			<td><input name="clave" id="clave" type="password" required></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>INGRESA SU ROL:</td>
			 <td><label for="rol"></label>
          <select name="rol" id="nacionalidad" >
            <option name="rol"   value="Comun"  selected="selected">Comun</option>
            <option name="rol"   value="Administrador"  selected="selected">Administrador</option>
          </select></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><input type="submit" name="validar" id="validar" value="Registrarse"/></td>
			<td><p><a href="login.php">Regresar</a></p></td>
		</tr>
	</table>
	</form>	
</fieldset>	
<body>
</body>
</html>