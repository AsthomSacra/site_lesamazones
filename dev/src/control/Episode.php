<?php
	/**
	* Classe gestion des articles
	*
	*/
	require_once("control/Controller.php");
	
	class Episode extends PDO{
	
		protected $ctrl;
		
		public function __construct(){
			$this->bd = new PDO('mysql:host=mysql.info.unicaen.fr;port=3306;dbname=21505101_dev;charset=utf8', '21505101', 'ood5Jiephoo2ieng');
		}
			
		public function recuperation($chapitreId, $episodeId){
			/* Récupère en base de données l'épisode demandée */

			/*SELECT titre, auteur, note, resume, texte
FROM prelude_episode AS ep
INNER JOIN prelude_contenu AS cont ON ep.id = cont.episodeId
WHERE ep.chapitreId = 1 AND ep.id = 1*/

		}
		
		
		
	}
?>