<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");
$horario=$arrayName = array(
  'mañana'=>array(05,06,07,08,09,10,11),
  'Tarde'=>array(12,13,14,15,16,17),
  'Noche'=>array(18,19,20,21,22,23),
  'Madrugada'=>array(00,01,02,03,04)
);
$horaactual=date("H");
foreach ($horario as $key => $value) {
  if (in_array($horaactual,$value)) {
    echo " Son las ".$horaactual." y es de: ".$key;

  }
}
 ?>
