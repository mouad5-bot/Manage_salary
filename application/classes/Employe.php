<?php 
	class Employe {
		public $id;
		public $nom;
		public $salaire_mensuel;
		public $salaire_de_base;
		

		public function __construct($id, $nom){
			$this->id = $id;
			$this->nom = $nom;
		}

		public function salaire($salaire_de_base){
			if($salaire_de_base < 0){
				echo 'error: le salire ne peut pas étre nigative';
				return ;
			}
			$this->salaire_mensuel = $salaire_de_base;
		}
		public function getSalaire(){
			return $this->salaire_mensuel;
		}
	}

?>