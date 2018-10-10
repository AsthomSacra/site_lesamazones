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
		$this->bd = new PDO('mysql:host=mysql.info.unicaen.fr;port=3306;dbname=21505101_dev;charset', '21505101', 'ood5Jiephoo2ieng');
	}
	
	public function episode($chapitreId, $episodeId){
		$this->mEpisode->recuperation($chapitreId, $episodeId);
		/* Fonction getEpisode qui traite les données de l'épisode */
		$this->v->makePageEpisode();
	}
	
}
?>
