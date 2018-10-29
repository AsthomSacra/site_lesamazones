<?php require_once('view/include/head.php'); ?>
<?php require_once('view/include/header.php'); ?>

<h1>View Episode</h1>
<?php 
	echo $this->getEpisodeInfo()['resume'];
?>
	
<?php require_once('view/include/footer.php'); ?>