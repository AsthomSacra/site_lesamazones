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
					<?php 
						echo '<ul>';
						foreach($this->getMenu() as $text => $link){
							echo "<li><a href=\"$link\">$text</a></li>";
						}
						echo '</ul>';
					?>
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
