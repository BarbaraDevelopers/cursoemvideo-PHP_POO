<?php 

require_once 'Pessoa.php';

class Professor extends Pessoa {

	//Atributos
	private $especialidade;
	private $salario;

	//Métodos
	public function receberAum($aum) {
		$this->salario += $aum;
	}

	//Métodos Especiais
	/*public function __construct($especialidade, $salario) {
		$this->especialidade = $especialidade;
		$this->salario = $salario;
	}*/

	public function getEspecialidade() {
		return $this->especialidade;
	}

	public function getSalario() {
		return $this->salario;
	}

	public function setEspecialidade($especialidade) {
		$this->especialidade = $especialidade;
	}

	public function setSalario($salario) {
		$this->salario = $salario;
	}
}

?>