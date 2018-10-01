<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<meta name="language" content="fr-FR" />
	<meta name="description" content="Les Amazones"/>
	<meta name="keywords" content="web"/>
	<meta name="author" content="Les Amazones"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
	<header>
		<nav class="navbar">
			<div class="container">
				<div class="navbar-social">
					<!-- Emplacement des réseaux sociaux -->
					<img class="navbar-social-img" src="img/facebook-logo.png" alt="Facebook"/>
					<img class="navbar-social-img" src="img/twitter-logo.png" alt="Twitter"/>
					<img class="navbar-social-img" src="img/discord-logo.png" alt="Discord"/>
				</div>
				<div class="navbar-menu">
					<!-- Emplacement du menu de navigation -->
					<?php require_once('view/include/menu.php'); ?>
				</div>
				<div class="navbar-lang">
					<!-- Emplacement du langage -->
					<img class="navbar-lang-img" src="img/fr.jpg" alt="FR"/>
				</div>
			</div>
			<div class="navbar-logo">
				<img class="navbar-logo-img" src="img/les-amazones-logo.png" alt="Les Amazones"/>
			</div>

			<div class="navbar-newsletter">
				<h1>Ne rien louper de l'aventure !</h1>
				<form><!-- Formulaire à compléter -->
					<input type="email" id="mail" name="user_mail" placeholder="Adresse email" required />
					<button type="submit">S'inscrire</button>
				</form>
			</div>
		</nav>
	</header>

	<div id="informations">
		<div id="yellow-line"></div>
		<div class="container">
			<div class="left">
				<h1>ÉPIQUE ET DÉJANTÉ !</h1>
				<p>Et licet quocumque oculos flexeris feminas adfatim multas spectare cirratas, quibus, si nupsissent, per aetatem ter iam nixus poterat suppetere liberorum, ad usque taedium pedibus pavimenta tergentes iactari volucriter gyris, dum exprimunt innumera simulacra, quae finxere fabulae theatrales.</p>
			</div>
			<div class="right">
				<img src="img/informations-lesamazones" alt="Les Amazones ?"/>
			</div>
		</div>
	</div>

	<div id="middle">
		<div class="actus">
			<div class="container">
				<div id="en-avant">
					<h2>Actualités</h2>
						<div class="container">
						<article class="article">
							<!-- Image miniature des articles -->
							<img src="img/miniature-article.jpg" alt="Miniature article"/>
							<h3 class="article-titre">Titre de l'article</h3>
							<p class="article-date">27-09-2018</p>	
						</article>
						<article class="article">
							<!-- Image miniature des articles -->
							<img src="img/miniature-article.jpg" alt="Miniature article"/>
							<h3 class="article-titre">Titre de l'article</h3>
							<p class="article-date">27-09-2018</p>
						</article>
						<article class="article">
							<!-- Image miniature des articles -->
							<img src="img/miniature-article.jpg" alt="Miniature article"/>
							<h3 class="article-titre">Titre de l'article</h3>
							<p class="article-date">27-09-2018</p>
						</article>
						<article class="article">
							<!-- Image miniature des articles -->
							<img src="img/miniature-article.jpg" alt="Miniature article"/>
							<h3 class="article-titre">Titre de l'article</h3>
							<p class="article-date">27-09-2018</p>
						</article>
					</div>
				</div>

				<div class="sorties">
					<div class="left">
					<!-- Sidebar gauche article -->
						<h2>Dernières sorties littéraires</h2>

						<ul>
							<li class="articles-liste">
								<div class="articles-liste-image">
									<img src="img/miniature-article.jpg" alt="Miniature"/>
								</div>
								<div class="articles-liste-contenu">
									<h4 class="articles-liste-contenu-titre">Titre de l'article</h4>
									<hr/>
									<p class="date">Publié le 30/09/2018 à 19:10<p>
									<p class="apercu">Equitis Romani autem esse filium criminis loco poni ab accusatoribus neque his iudicantibus oportuit neque defendentibus nobis.</p>
								</div>
							</li>

							<li class="articles-liste">
								<div class="articles-liste-image">
									<img src="img/miniature-article.jpg" alt="Miniature"/>
								</div>
								<div class="articles-liste-contenu">
									<h4 class="articles-liste-contenu-titre">Titre de l'article</h4>
									<hr/>
									<p class="date">Publié le 30/09/2018 à 19:10<p>
									<p class="apercu">Equitis Romani autem esse filium criminis loco poni ab accusatoribus neque his iudicantibus oportuit neque defendentibus nobis.</p>
								</div>
							</li>

							<li class="articles-liste">
								<div class="articles-liste-image">
									<img src="img/miniature-article.jpg" alt="Miniature"/>
								</div>
								<div class="articles-liste-contenu">
									<h4 class="articles-liste-contenu-titre">Titre de l'article</h4>
									<hr/>
									<p class="date">Publié le 30/09/2018 à 19:10<p>
									<p class="apercu">Equitis Romani autem esse filium criminis loco poni ab accusatoribus neque his iudicantibus oportuit neque defendentibus nobis.</p>
								</div>
							</li>

						</ul>
			
					</div>

					<div class="right">
					<!-- Sidebar droite illustration -->
						<h2>Dernières illustrations</h2>
						<div class="illustration">
							<img class="actus-illu" src="img/miniature-article.jpg" alt="Illustration">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sidebar-right">
			<div class="container">
				<p>Equitis Romani autem esse filium criminis loco poni ab accusatoribus neque his iudicantibus oportuit neque defendentibus nobis. Nam quod de pietate dixistis, est quidem ista nostra existimatio, sed iudicium certe parentis; quid nos opinemur, audietis ex iuratis; quid parentes sentiant, lacrimae matris incredibilisque maeror, squalor patris et haec praesens maestitia, quam cernitis, luctusque declarat.</p>

				<p>Raptim igitur properantes ut motus sui rumores celeritate nimia praevenirent, vigore corporum ac levitate confisi per flexuosas semitas ad summitates collium tardius evadebant. et cum superatis difficultatibus arduis ad supercilia venissent fluvii Melanis alti et verticosi, qui pro muro tuetur accolas circumfusus, augente nocte adulta terrorem quievere paulisper lucem opperientes. arbitrabantur enim nullo inpediente transgressi inopino adcursu adposita quaeque vastare, sed in cassum labores pertulere gravissimos.</p>

				<p>Ideo urbs venerabilis post superbas efferatarum gentium cervices oppressas latasque leges fundamenta libertatis et retinacula sempiterna velut frugi parens et prudens et dives Caesaribus tamquam liberis suis regenda patrimonii iura permisit.</p>
			</div>
		</div>
	</div>

	<div class="equipe">
		<div class="container">
			<h2>Équipe</h2>
			<p>Ideo urbs venerabilis post superbas efferatarum gentium cervices oppressas latasque leges fundamenta libertatis et retinacula sempiterna velut frugi parens et prudens et dives Caesaribus tamquam liberis suis regenda patrimonii iura permisit.</p>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<div class="footer-newsletter">
				<h1>Newsletter</h1>
				<form> <!-- Formulaire à compléter -->
					<input type="email" id="mail" name="user_mail" placeholder="Adresse email" required />
					<button type="submit">S'inscrire</button>
				</form>
			</div>
			<div class="footer-liens">
				<h1>Liens utiles</h1>
				<ul>
					<li>Test</li>
					<li>Test</li>
					<li>Test</li>
				</ul>
			</div>
		</div>
	</footer>
	
	

</body>
</html>
