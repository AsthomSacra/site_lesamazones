<?php
	/**
	* Classe gestion des articles
	*
	*/
	require_once("control/Controller.php");
	
	class Episode extends PDO{
	
		protected $ctrl;
		protected $episodeInfo;
		protected $validation;
		
		public function __construct(){
			$this->bd = new PDO('mysql:host=localhost;port=3306;dbname=lesamazones;charset=UTF8', 'root', '');
		}
			
		public function recuperation($chapitreId, $episodeId){
			/* Récupère en base de données l'épisode demandée */
			try{
				echo "On est dans le modèle Episode";
				$req = $this->bd->prepare("SELECT * FROM prelude_episode WHERE chapitre = :chapitreId AND episode = :episodeId");
				$req->execute(array('chapitreId' => $chapitreId, 'episodeId' => $episodeId));
				$existe = $req->rowCount();

				if($existe === 1){
					echo "L'épisode existe";
					$this->episodeInfo = $req->fetch();
					return $this->episodeInfo;
				}
				else{
					echo "L'épisode n'existe pas";
					return null;
				}
			}
			catch(Exception $e)
    		{
            	echo "On est dans le catch";
   			 }
   		}   


		public function getEpisodeInfo(){
			return $this->episodeInfo();
		}
		public function getValidation(){
			return $this->validation();
		}
		
		
	}
?>