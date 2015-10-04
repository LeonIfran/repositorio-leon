<?php
/**
 *
 */
/*require_once gestion.php;*/

 class Estacionamiento
 {

 	function __construct()
 	{


 	}

 	public static function Guardar($patente)
 	{
 	  date_default_timezone_set("America/Argentina/Buenos_Aires");

      $ahora=date("y-m-d H:m:s");
      $renglon=$patente."=>".$ahora."\n";
      $archivo=fopen("autos.txt", "a");
      fwrite($archivo, $renglon);
      fclose($archivo);
 	}
 	public static function Leer()
 	{
 	  $ListaDeAutos=array();
      $archivo=fopen("autos.txt", "r");
      while (!feof($archivo))
       {
      	$renglon=fgets($archivo);
      	$Auto=explode("=>", $renglon);
      	$ListaDeAutos[]=$Auto;
       }

      fclose($archivo);
      return $ListaDeAutos;
 	}
public static function GuardarListado($Listado)
      {
        $archivo=fopen("estacionados.txt", "w");
        foreach ($Listado as $Auto) {
            if ($Auto[0]!="") {
                 $dato=$Auto[0]."=>".$Auto[1]."\n";
              fwrite($archivo, $dato);
            }

        }
        fclose($archivo);
      }
 	public static function Sacar($patente)
 	{
      date_default_timezone_set("America/Argentina/Buenos_Aires");
      $Listado=Estacionamiento::Leer();
      $esta=false;
      $mensaje='';
      foreach ($Listado as $Auto) {
      	if ($Auto[0]==$patente) {
      		$esta=true;
      		$ahora=date("y-m-d H:m:s");
      		$inicio=$Auto[1];
      		$diferencia=strtotime($ahora)-strtotime($inicio);
      		$costo=$diferencia * 15;
      		$mensaje= "el costo es: ".$costo;
      	}
            else
            {
                  $ListadoAdentro[]=$Auto;

            }
      }
      if (!$esta) {
        $mensaje="no esta la patenta";
      }
      Estacionamiento::GuardarListado($ListadoAdentro);
      echo $mensaje;




 	}
      public static function CargarTablaEstacionados()
      {

            $Lista=Estacionamiento::Leer();
            $archivo=fopen("tablaestacionados.php", "w");
            foreach ($Lista as $Auto) {
                  $renglon=$Auto[0]." ".$Auto[1]."<br>";
                  fwrite($archivo, $renglon);
            }

      }

 }
 ?>
