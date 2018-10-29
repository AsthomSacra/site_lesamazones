<?php

require_once("Router.php");

class View
{
	/* VIEW MAIN */
	
	protected $episodeInfo;
	protected $titre;

	public function __construct(Router $router) {
		$this->router = $router;
		$this->title = null;
		$this->content = null;
	}
	   
	/* render() par défaut, sera utilisé pour l'erreur 404 */
	public function renderDefault()
	{
		require_once("squelette.php");
	}
	
	protected function getMenu() {
		return array(
			"À PROPOS" => $this->router->getHomeURL(),
			"ŒUVRES" => "",
			"BLOG" => "",
			"MÉDIAS" => "",
			"CONTACT" => "",
			"CONNEXION" => "",
		);
	}
	

	
	protected function getFooter() {
		return  "<div id=\"copyright\"><p>©Les Amazones 2016-2018. Tous droits réservés.</p></div>";
	}
	
  
	public function makePageHome(){
		require_once("ViewHome.php");
		//$this->contenu = "include/home.php";
	}

	public function makePageEpisode(){
		require_once("ViewEpisode.php");
		//$this->contenu = "include/home.php";
	}

	public function makePageChapitre(){
		require_once("ViewChapitre.php");
		//$this->contenu = "include/home.php";
	}

	public function makePageEpisodeInconnu(){
		require_once("ViewEpisodeInconnu.php");
	}

	public function setEpisodeInfo($infos){
		$this->episodeInfo = $infos;
	}
	public function getEpisodeInfo(){
		return $this->episodeInfo;
	}

	public function setTitre($titre){
		$this->titre = $titre;
	}
	public function getTitre(){
		return $this->titre;
	}

}
?>
