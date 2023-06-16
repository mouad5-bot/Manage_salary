<?php
include 'Employe.php';
	class EmployeRegulier extends Employe {
		public $id;
		public $nbr_heur_travailler = 150;
	
		public function salaire($taux_horaire_fixe){
			$this->salaire_mensuel = $this->nbr_heur_travailler * $taux_horaire_fixe;
		}

		public function getSalaire(){
			return $this->salaire_mensuel;
		}
	}

	$obj = new EmployeRegulier();
	$obj->salaire(20);
	var_dump($obj);


?>
