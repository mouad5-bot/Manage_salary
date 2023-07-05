<?php 
include 'Employe.php';
include '../config/connection.php';

	class Gestionnaire extends Employe {
		public $bonus_annuel;

		public function __construct($id, $nom, $salaire_de_base){
			parent::__construct($id, $nom, $salaire_de_base);
		}
	
		public function salaire($bonus_annuel){

			if($bonus_annuel < 0) 
			    throw new Exception('le bonus ennuel ne peut pas être négative');
			
			$this->salaire_mensuel = $this->salaire_de_base + ($bonus_annuel / 12);

			$sql = "INSERT INTO gestionnaire (id, employe_id, salaire_de_base, salaire_mensuel, bonus_annuel)
			VALUES (3, 2, $this->salaire_de_base, $this->salaire_mensuel, $bonus_annuel)";

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

	$obj = new Gestionnaire(1, "test", 5000);
	$obj->salaire(5200);
	echo json_encode($obj);
?>
