<?php 
include 'Employe.php';
include '../config/connection.php';
	class CadreSuperieur extends Employe{
		public $salaire_annuel;

		public function __construct($id, $nom, $salaire_de_base){
			parent::__construct($id, $nom, $salaire_de_base);
		}
		public function salaire($salaire_annuel){
			if($salaire_annuel < 0){
				echo 'error: le salire ne peut pas étre nigative';
				return ;
			}
			
			$this->salaire_mensuel =$salaire_annuel / 12;

			$sql = "INSERT INTO cadresuperieur (id, employe_id, salaire_annuel, salaire_mensuel)
			VALUES (2, 3, $salaire_annuel, $this->salaire_mensuel)";

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
	$obj = new CadreSuperieur(3, "mhamed", 3600);
	$obj->salaire(50000);
	var_dump($obj);
?>
