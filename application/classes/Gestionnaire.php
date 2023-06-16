<?php 
include 'Employe.php';
	class Gestionnaire extends Employe {
		public $id;
		public $salaire_de_base = 3000;
	
		public function salaire($bonus_annuel){
			$this->salaire_mensuel = $this->salaire_de_base + ($bonus_annuel / 12);
		}

		public function getSalaire(){
			return $this->salaire_mensuel;
		}
	}

	$obj = new Gestionnaire();
	$obj->salaire(1200);
	var_dump($obj);
?>
