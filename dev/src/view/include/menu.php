<?php 
	echo '<ul>';
	foreach($this->getMenu() as $text => $link){
		echo "<li><a href=\"$link\">$text</a></li>";
	}
	echo '</ul>';
?>