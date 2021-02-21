<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario</title>
</head>

<body>
	<form action="capturar.php" method="post">
		Ingrese su nombre *:
		<input type="text" name="nombre" placeholder="Ingresa tu nombre"/>
		<br/>
		Ingrese su apellido *:
		<input type="text" name="apellido" placeholder="Ingresa tu apellido"/>
		<br/>
		Ingrese su edad *:
		<input type="number" name="edad" placeholder="Ingresa tu edad"/>
		<br>
		Género:
		<input type="radio" name="radioM" value="Masculino" />Masculino
		<input type="radio" name="radioF" value="Femenino" />Femenino
		<br>
		Idioma:
		<input type="checkbox"  name="idiomas[]" value="Inglés" />Ingles
		<input type="checkbox" name="idiomas[]" value="Aleman" />Aleman
		<input type="checkbox"  name="idiomas[]" value="Ruso"/>Ruso
		<input type="checkbox" name="idiomas[]" value="Frances" />Frances
		<br>
		
		Seleccione su salario:
		<select name="salario">
			<option value="1">1-450</option>
			<option value="2">401-1000</option>
			<option value="3">1001-1500</option>
			<option value="4">Mayor a 1500</option>	
		</select>
		<br/>
		<input type="submit" value="Enviar"/>
			

		
		<br/>
</body>
</html>