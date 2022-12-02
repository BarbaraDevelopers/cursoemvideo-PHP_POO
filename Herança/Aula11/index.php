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

			//require_once 'Pessoa.php';
			//require_once 'Visitante.php';
			require_once 'Aluno.php';
			require_once 'Bolsista.php';
			require_once 'Professor.php';
			require_once 'Tecnico.php';

			//Visitante
			/*$v1 = new Visitante();
			$v1->setNome("Juvenal");
			$v1->setIdade(33);
			$v1->setSexo("M");
			print_r($v1);*/

			//Aluno
			$a1 = new Aluno();
			$a1->setNome("Pedro");
			$a1->setMatricula(1111);
			$a1->setIdade(16);
			$a1->setSexo("M");
			$a1->setCurso("Informática");
			$a1->pagarMensalidade();
			print_r($a1);

			//Bolsista
			$b1 = new Bolsista();
			$b1->setNome("Jubileu");
			$b1->setMatricula(2222);
			$b1->setBolsa(12.5);
			$b1->setIdade(17);
			$b1->setSexo("M");
			$b1->setCurso("Administração");
			$b1->pagarMensalidade();
			print_r($b1);

			//Professor
			$p1 = new Professor();
			$p1->setNome("Vitor");
			$p1->setIdade(26);
			$p1->setSexo("M");
			$p1->setEspecialidade("PHP");
			$p1->setSalario(2500.00);
			$p1->receberAumento();
			print_r($p1);

			//Tecnico
			$t1 = new Tecnico();
			$t1->setNome("Yoshi");
			$t1->setIdade(32);
			$t1->setSexo("M");
			$t1->setMatricula(3333);
			$t1->setCurso("Tatuagem");
			$t1->setregistroProfissional(12.5);
			$t1->praticar();
			print_r($t1);
		?>
	</pre>
</body>
</html>