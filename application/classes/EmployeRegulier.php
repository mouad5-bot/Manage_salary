<?php
include 'Employe.php';
include '../config/connection.php';

	class EmployeRegulier extends Employe {
		public $id;
		public $nbr_heur_travailler = 150;

		public function __construct($id, $nom){
			parent::__construct($id, $nom);
		}
	
		public function salaire($taux_horaire_fixe){
			if($taux_horaire_fixe < 0){
				echo 'error: le taux horaire ne peut pas étre nigative';
				return ;
			}
			$this->salaire_mensuel = $this->nbr_heur_travailler * $taux_horaire_fixe;
		}

		public function getSalaire(){
			return $this->salaire_mensuel;
		}
	}

	$obj = new EmployeRegulier(29, "Ahmed");
	$obj->salaire(20);
	var_dump($obj);


?>
