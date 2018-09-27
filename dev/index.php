<?php

	/*
	 * On indique que les chemins des fichiers qu'on inclut
	 * seront relatifs au répertoire src.
	 */
	set_include_path("./src");
	
	/* Inclusion des classes utilisées dans ce fichier */
	require_once("Router.php");
	
	//Page d'accueil
	
	$router = new Router();
	$router-> main();

?>