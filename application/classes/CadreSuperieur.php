<?php 
include 'Employe.php';
	class CadreSuperieur extends Employe{
		public $id;
		public function salaire($salaire_annuel){
			$this->salaire_mensuel =$salaire_annuel / 12;
		}

		public function getSalaire(){
			return $this->salaire_mensuel;
		}
	}
	$obj = new CadreSuperieur();
	$obj->salaire(60000);
	var_dump($obj);
?>
