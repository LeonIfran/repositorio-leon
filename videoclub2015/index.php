
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title ></title>
</head>
<body>
<form action="gestion.php" method="POST">
	<table border='2'>
		<tr>
			<td>Cliente</td>
			<td>Pelicula</td>
			<td>Alguilada por</td>
			<td>Es para niños?</td>
		</tr>
		<td><input type="text" name="txtCliente" id="txtC"></td>
		<td>
			<select name="lstbPelicula" id="lstb" size='1'>
				<option value="1">Avengers</option>
				<option value="2">Mad max</option>
				<option value="3">Rick and Morty</option>

		</select>
	</td>
		<td>
			<input type="radio" name="rdoTiempo">
			<input type="radio" name="rdoTiempo">
			<input type="radio" name="rdoTiempo">
		</td>
		<td>
			<input type="checkbox" name="checkATP">
		</td>
		<tr>
		</tr>
			</table>
			<input type="submit" value="alquler" name="enviar">
</form>
</body>
</html>
