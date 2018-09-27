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
		$profilid = key_exists('id', $_GET)? $_GET['id']: null;
		$supprimerId = key_exists('supprimer', $_GET)? $_GET['supprimer']: null;
		$articleId = key_exists('articleId', $_GET)? $_GET['articleId']: null;
		$membres = key_exists('membres', $_GET)? $_GET['membres']: null;
		$articles = key_exists('articles', $_GET)? $_GET['articles']: null;
		$membreId = key_exists('membreId', $_GET)? $_GET['membreId']: null;
		
		if ($action === null) {
			/* Pas d'action demandée : par défaut on affiche
	 	 	 * la page d'accueil, sauf si une couleur est demandée,
	 	 	 * auquel cas on affiche sa page. */
			$action = ($profilid === null) ? "accueil" : "profil";
		}
		
		try {
			switch($action) {
				case "accueil":
					session_start();
					$ctrl->userInfo();
					$ctrl->listerArticlesAccueil();
					break;		

				case "blog":
					$ctrl->blog();
					break;
				
				case "apropos":
					$ctrl->apropos();
					break;
				
				case "connexion":
					$ctrl->verifConnexion();
					break;
					
				case "inscription":
					$ctrl->verifInscription();
					break;
					
				case "verificationInscription":
					$ctrl->verifInscription();
					break;
					
				case "profil":
				if($profilid === null){
					$view->makePageProfilInconnu();
				}
				else{
					$ctrl->profilPage($profilid);
				}
				break;
				
				case "deconnexion":
					$ctrl->deconnexion();
					break;
					
				case "edition":
					$ctrl->edition();
					break;
				
				case "admin":
					if($supprimerId === null OR $membres === null OR $articles === null OR $articleId === null){
						$ctrl->admin();
					}
					if($supprimerId !== null OR $membres !== null OR $articles !== null OR $articleId !== null){
						if(key_exists('id', $_SESSION) AND $_SESSION['role'] === 'admin')
						{
							if($supprimerId !== null){
								$ctrl->supprimerCompte($supprimerId);
							}
							if($membres !== null){
								if($membres === 'ajouter'){
									$ctrl->verifAjout();
								}
								if($membres === 'lister'){
									$ctrl->listerMembres();
								}
								if($membres === 'modifier'){
									$ctrl->modifierMembre($membreId);
								}
							}
							if($articles !== null){
								if($articles ==='lister'){
									$ctrl->listerArticles();
								}
								if($articles === 'ajouter'){
									$ctrl->ajoutArticle();
								}
								if($articles === 'modifier'){
									$ctrl->modifierArticle($articleId);
								}
								if($articles === 'supprimer'){
									$ctrl->supprimerArticle($articleId);
								}
							}
						}
						else{
							$view->makePageAdminErreur();
						}
					}
					break;
					
				default:
					echo "pop";
					break;
			}
		} catch (Exception $e) {
			echo "pop";
		}
		$view->render();

	}
	
	public function getHomeURL(){
		return ".";
	}
	
	public function connexionPage(){
		return ".?action=connexion";
	}
	
	/*public function monProfilPage(){
		$id = $this->v->getUserInfo();
		var_dump($id);
		return ".?action=profil&id=".$id['id'];
	}*/
	
	public function adminPage(){
		return ".?action=admin";
	}
	
	public function blogPage(){
		return ".?action=blog";
	}
	
	public function apropos(){
		return ".?action=apropos";
	}
	
	public function inscriptionPage(){
		return ".?action=inscription";
	}
	
	public function inscriptionMembre(){
		return ".?action=verificationInscription";
	}
	
	public function deconnexionPage(){
		return ".?action=deconnexion";
	}
}
?>
