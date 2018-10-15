<?php

require_once("view/View.php");
require_once("control/Controller.php");

class Router {
   
   protected $v;
	
	public function __construct() {
		$this->v = new View($this);
	}
	public function main(){
	
		$view = new View($this);
		$ctrl = new Controller($view);
		
		$action = key_exists('action', $_GET)? $_GET['action']: null;
		$chapitreId = key_exists('chapitreId', $_GET)? $_GET['chapitreId']: null;
		$episodeId = key_exists('episode', $_GET)? $_GET['episode']: null;
		
		if ($action === null) {
			/* Pas d'action demandée : par défaut on affiche */
			$action = "home";
		}
		
		try {
			switch($action) {
				case "home":
					$this->v->makePageHome();
					break;	


				case "chapitre":
					if($episodeId !== null){
						/* Concerne Prles lights novels */
						$ctrl->episode($chapitreId, $episodeId);
					}
					else{
						/* Concerne les romans et chapitres de lights novels */
						$this->v->makePageChapitre($chapitreId);	
					}
					break;	

				default:
					echo "pop";
					$view->renderDefault();
					break;
			}
		} catch (Exception $e) {
			echo "pop";
		}

	}
	
	public function getHomeURL(){
		return ".";
	}

	/* Pour plus tard 
	public function getChapitreURL(){
		return ".?action=chapitre";
	} 
	*/
	
}
?>
