<?php 
	class Employe {
		public $id;
		public $nom;
		public $salaire_mensuel;

		public function salaire($salaire_de_base){
			$this->salaire_mensuel = $salaire_de_base;
		}
		public function getSalaire(){
			return $this->salaire_mensuel;
		}
	}
?>