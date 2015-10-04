<?php
public class alquiler
{
	private $cliente;
	private $pelicula;
	private $dias;
	private $fechaRetiro;
	private $esParaNiños;
	private $importe;


public function __construct($cliente, $pelicula, $dias, $fecha="nada")
{
$this->cliente=$cliente;
$this->pelicula=$pelicula;
$this->dias=$dias;
if ($fecha=="nada") {
	$this->fecha=date("d/m/y h:m");

}
else
$this->fecha=$fecha;
}
public function calcularImporte()
{

	$Tiempo=date_diff($this->dias,$this->fechaRetiro);
	if ($this->esParaNiños=="true") {
		$costo=($this->dias*15)-(($this->dias*15)/0.10);

	}
	else
		$costo=($this->dias*15);
	return $costo;


}
function toStringFormat()
{
	$cadena=$this->cliente."=>".$this->pelicula."=>".$this->dias."=>".$this->fechaRetiro."=>".$this->esParaNiños."=>".$this->importe;
	return $cadena;
}
function registrarAlquiler($alquiler)
{
	$aux=$alquiler->toStringFormat();
    $archivo=fopen("Alquileres.txt", "a");
      fwrite($archivo, $aux);
      fclose($archivo);
}
public static function obtenerAlquileres()
{
	$ArrayAlquileres=array();
      $archivo=fopen("Alquileres.txt", "r");
      while (!feof($archivo))
       {
      	$renglon=fgets($archivo);
      	$Alq=explode("=>", $renglon);
      	$alquilerObjeto= new alquiler($alq[0],$alq[1],$alq[2],$alq[3]);
      	$ArrayAlquileres[]=$alquilerObjeto;
       }

      fclose($archivo);
      return $ArrayAlquileres;
}
public function getCliente()
{
 return $this->cliente;
}
public function setCliente($valor)
{
 $this->cliente=$valor;
}
public function getPelicula()
{
 return $this->Pelicula;
}
public function setPelicula($valor)
{
 $this->pelicula=$valor;
}

public function getDias()
{
 return $this->dias;
}
public function setDias($valor)
{
 $this->dias=$valor;
}

public function getFechaRetiro()
{
 return $this->fechaRetiro;
}
public function setFechaRetiro($valor)
{
 $this->fechaRetiro=$valor;
}

public function getesParaNiños()
{
 return $this->esParaNiños;
}

public function setesParaNiños($valor)
{
 $this->esParaNiños=$valor;
}

public function getImporte()
{
 return $this->importe;
}
public function setImporte($valor)
{
 $this->importe=$valor;
}

}
?>
