<html>
<head>

	<title>SUMA</title>


</head>
<body>
	  <div class="container">
	  	  <div class="page-header">
              
            </div>
					<div class="CajaInicio animated bounceInRight">
													
							<form action="suma.php"id="suma" method="POST">
 							
							<label>Ingrese numero </label>
 							<input name="num1" id="num1" type="text"></input><br>

							<label >Ingrese numero </label>
 							<input  name="num2" id="num2" type="text"></input><br>
 							<input id="sumar" type="submit" value="enviar"></input>
							</form>
							<?php

							$numUNO=$_POST["num1"];
							$numDOS=$_POST["num2"];
							$sumar=$numUNO+$numDOS;
							echo "$sumar";

							 ?>
						</div>
		</div>
</body>
</html>