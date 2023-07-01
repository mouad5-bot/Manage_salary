<?php 
include 'Employe.php';
	class Gestionnaire extends Employe {
		public $id;
		public $salaire_de_base = 3000;

		public function __construct($id, $nom){
			parent::__construct($id, $nom);
		}
	
		public function salaire($bonus_annuel){
			$this->salaire_mensuel = $this->salaire_de_base + ($bonus_annuel / 12);
		}

		public function getSalaire(){
			return $this->salaire_mensuel;
		}
	}

	$obj = new Gestionnaire(1, "john");
	$obj->salaire(1200);
	echo json_encode($obj);
?>
