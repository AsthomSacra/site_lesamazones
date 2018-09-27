<?php

require_once("view/View.php");

class Router {
   
   protected $v;
	
	public function __construct() {
		$this->v = new View($this);
	}
	public function main(){
	
		$view = new View($this);
		
		$action = key_exists('action', $_GET)? $_GET['action']: null;
		
		if ($action === null) {
			/* Pas d'action demandée : par défaut on affiche */
			$action = "home";
		}
		
		try {
			switch($action) {
				case "home":
					$this->v->makePageHome();;
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
	
}
?>
