<?php
session_start();

include("fonction_oc.php");
?>




	<a href="index.php">accueil</a>

	<a href="accueil.php">accueil</a>

	<?php 
	if (isset($_SESSION['id']))
	 { ?>
	 	<a href="profil.php">profil</a>
	 	<a href="proposer_son_aide.php">aider</a>
	 	<a href="demander_aide.php">besoin d'aide</a>
<?php } 
	else
	{ ?>
		<a href="inscription.php">inscription</a>
		<a href="connexion">connexion</a>
<?php }

	?>

	<a href="">contact</a>

	<a href="">contact</a>
	<form action="" method="post">
	<input type="submit" name="deco" value="déconnection"> 
	<?php suprime() ?>
	</form>

