<?php

require_once("view/View.php");
require_once("model/Episode.php");

class Controller extends PDO
{
	protected $v;
	protected $bd;
	protected $router;
	protected $mEpisode;
	
	public function __construct(View $view) {
		$this->v = $view;
		$this->mEpisode = new Episode();
	}
	
	public function episode($chapitreId, $episodeId){
		$req = $this->mEpisode->recuperation($chapitreId, $episodeId);
		var_dump($req);
		if($req !== null){
			$this->v->setEpisodeInfo($req);
		}
		else{
			$this->v->makePageEpisodeInconnu();
		}
		/* Fonction getEpisode qui traite les données de l'épisode */
		$this->v->makePageEpisode();
	}
	
}
?>
