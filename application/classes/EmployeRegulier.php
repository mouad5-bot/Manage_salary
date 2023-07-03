<?php
include 'Employe.php';
include '../config/connection.php';

	class EmployeRegulier extends Employe {
		public $id;
		public $nbr_heur_travailler = 150;

		public function __construct($id, $nom, $salaire_de_base){
			parent::__construct($id, $nom, $salaire_de_base);
		}
	
		public function salaire($taux_horaire_fixe){
			if($taux_horaire_fixe < 0){
				echo 'error: le taux horaire ne peut pas étre nigative';
				return ;
			}
			$this->salaire_mensuel = $this->nbr_heur_travailler * $taux_horaire_fixe;

			$sql = "INSERT INTO employeregulier (id, employe_id, nombre_heurs, salaire_mensuel)
			VALUES (3, 3, $this->nbr_heur_travailler, $this->salaire_mensuel)";

			if ($GLOBALS['connection']->query($sql) === TRUE) {
			echo "New record created successfully";
			} else {
			echo "Error: " . $sql . "<br>" . $GLOBALS['connection']->error;
			}

			$GLOBALS['connection']->close();						
		}

		public function getSalaire(){
			return $this->salaire_mensuel;
		}
	}

	$obj = new EmployeRegulier(29, "Ahmed", 4000);
	$obj->salaire(20);
	var_dump($obj);


?>
