<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Administracion productos</title>
	
</head>

<body>
<h1>Mantenimiento tabla productos</h1>
<fieldset style="width: 400px">
	<form action="capturar.php" method="post">
	<table width="400px" border="0">
		<tr>
			<td width="150">Nombre del producto:</td>
			<td><input name="nombreP" type="text" ></td>
			<td width="150">&nbsp;</td>
		</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>Stock del producto:</td>
			<td><input name="stockP" id="clave" type="text" required></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>Precio del producto</td>
			<td><input name="precioP" id="precio" type="text" required></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>Categoria del producto</td>
			<td><input name="categoriaP" id="clave" type="text" required></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><input type="submit" name="validar" id="validar" value="Ingresar"/></td>
			<td><p><a href="login.php">Regresar</a></p></td>
		</tr>
	</table>
	</form>	
</fieldset>	
</body>
</html>