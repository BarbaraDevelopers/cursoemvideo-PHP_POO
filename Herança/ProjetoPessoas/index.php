<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
	<body>
		<pre>
			<?php 
			
				require_once 'Pessoa.php';
				require_once 'Aluno.php';
				require_once 'Professor.php';
				require_once 'Funcionario.php';

				//Programa Principal
				$p1 = new Pessoa();
				$p2 = new Aluno();
				$p3 = new Professor();
				$p4 = new Funcionario();

				$p1->setNome("Pedro");
				$p2->setNome("Maria");
				$p3->setNome("Claudio");
				$p4->setNome("Fabiana");

				$p2->setCurso("Informática");
				$p3->setSalario("2500.75");
				$p4->setSetor("EStoque");

				$p3->receberAum(550.20);
				$p4->mudarTrabalho();
				$p2->cancelarMatr();

				print_r($p1);
				print_r($p2);
				print_r($p3);
				print_r($p4);
			?>
		</pre>
	</body>
</html>