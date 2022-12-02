<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
	<body>
		<pre>
			<h3>Projeto Controle Remoto</h3>
			<?php 
				require_once 'ControleRemoto.php';
				$c = new ControleRemoto();
				$c->ligar();
				$c->maisVolume();
				$c->abrirMenu();
			?>
		</pre>
	</body>
</html>