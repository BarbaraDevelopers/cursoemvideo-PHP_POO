<?php 

require_once 'Aluno.php';

class Tecnico extends Aluno {
	private $registroProfissional;
	
	public function praticar() {
		
	}

	public function getregistroProfissional() {
		return $this->registroProfissional;
	}

	public function setregistroProfissional($registroProfissional) {
		$this->registroProfissional = $registroProfissional;
	}
}

?>