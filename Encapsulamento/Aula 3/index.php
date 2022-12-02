<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Estudo - POO</title>
	</head>
	<body>
		<pre>

		<?php 
			require_once 'Caneta.php';
			$c1 = new Caneta; //instanciando objeto 
			$c1->modelo= "Bic Cristal";
			$c1->cor = "Azul";
			//$c1->ponta = 0.5;
			//$c1->carga = 99;
			//$c1->tampada();
			$c1->rabiscar();
			$c1->destampar();
			print_r($c1);

		?>

		</pre>
	</body>
</html>


