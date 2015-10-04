<?php
echo "
<html>
  <head>

    <title></title>
  </head>
  <body>
  ";
    $arrayColores=array("Red","Green","Blue","Violet","Orange");
    $largo=count($arrayColores);
    for ($i=0; $i<$largo; $i++) {
      echo "<font color=".$arrayColores[$i].">\nesto es un texto</font>";
    }
     echo "
  </body>
</html>
";
?>
