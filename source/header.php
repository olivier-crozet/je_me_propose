<?php
session_start();
?>


<header>
	<a href="index.php">acceuil</a>
	<?php 
	if (isset($_SESSION['id']))
	 { ?>
	 	<a href="">profil</a>
	 	<a href="proposer_son_aide.php">aider</a>
	 	<a href="demander_aide.php">besoin d'aide</a>
<?php } 
	else
	{ ?>
		<a href="">inscription</a>
		<a href="connexion">connexion</a>
<?php }

	?>
	<a href="">contact</a>
</header>