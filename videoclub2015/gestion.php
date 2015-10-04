<?php
include "alquiler.php";
$alquiler_objeto=new alquiler($_POST["txtCliente"],$_POST["lstbPelicula"],$_POST["rdoTiempo"]);
var_dump $alquiler_objeto;
 ?>
 
<html>
<head>
	<title></title>
</head>
<body>
<form>
<table>
	<th>Total a pagar:</th>
	<tr>
		<td>Cliente</td>
		<td>Pelicula</td>
		<td>Dias</td>
		<td>Fecha de retiro</td>
	</tr>

<?php   $var = alquiler::obtenerAlquileres();   ?>

<?php foreach ($var as $key=>$value ){  ?>
	<tr>
		<td><?php  $key->getCliente;?></td>
		<td><?php $key->getPelicula; ?></td>
		<td><?php $key->getDias; ?></td>
		<td><?php $key->getFechaRetiro; ?> </td>

	</tr>
<?php  } ?>

</table>
<input type="text" name="txtDevolver">
<input type="submit" name="sbtDevolver" value="Devolver">
</form>
<href="index.php">
</body>
</html>
