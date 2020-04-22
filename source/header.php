<?php
session_start();
?>



	<a href="index.php">accueil</a>
	<?php 
	if (isset($_SESSION['id']))
	 { ?>
	 	<a href="">profil</a>
	 	<a href="">aider</a>
	 	<a href="">besoin d'aide</a>
<?php } 
	else
	{ ?>
		<a href="">inscription</a>
		<a href="">connexion</a>
<?php }

	?>
	<a href="">contact</a>