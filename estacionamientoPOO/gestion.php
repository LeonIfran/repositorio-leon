<?php 
require "estacionamiento.php";
$accion=$_POST['estacionar'];
$patente=$_POST['patente'];
if ($_POST['estacionar']=="ingreso") {
	echo "Es ingreso";
	Estacionamiento::Guardar($patente);
	Estacionamiento::Leer();
}

else
{
	/*$datos=Estacionamiento::Leer();
	var_dump($datos);*/
	Estacionamiento::Sacar($patente);

}


 ?>