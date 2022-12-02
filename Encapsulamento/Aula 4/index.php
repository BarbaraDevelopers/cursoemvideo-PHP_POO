<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GET / SET / Construct</title>
</head>
	<body>
		<pre>
		<?php
			require_once 'Caneta.php';

			$c1 = new Caneta("Bic", "Azul", 0.5);
			$c2 = new Caneta("Nic", "Vermelho", 1.4);
			//$c1->setModelo("Bic");
			//$c1->setPonta(0.5); //acessando via metodo
			//print "Eu tenho uma caneta {$c1->getModelo() } de ponta {$c1->getPonta()}";

			print_r($c1);
			print_r($c2);
		?>
		</pre>
	</body>
</html>