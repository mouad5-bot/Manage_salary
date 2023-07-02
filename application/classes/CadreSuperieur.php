<?php 
include 'Employe.php';
	class CadreSuperieur extends Employe{
		public $id;

		public function __construct($id, $nom){
			parent::__construct($id, $nom);
		}
		public function salaire($salaire_annuel){
			if($salaire_annuel < 0){
				echo 'error: le salire ne peut pas étre nigative';
				return ;
			}
			
			$this->salaire_mensuel =$salaire_annuel / 12;
		}

		public function getSalaire(){
			return $this->salaire_mensuel;
		}
	}
	$obj = new CadreSuperieur(3, "mhamed");
	$obj->salaire(60000);
	var_dump($obj);
?>
