<link rel="stylesheet" type="text/css" href="../css/connexion.css">
<link rel="stylesheet" type="text/css" href="../css/accueil.css">
<link rel="icon" type="image/png" href="../pics/icon/jeMePropose.png">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<div class="header-logo-title">
            <img src="../pics/icon/jeMePropose.png" alt="je me propose logo" title="Site d'entraide">
            <h1>Je-me-propose.com</h1>
        </div>

        <header class="block-accueil">
            <?php include "../source/header.php";  ?>

        </header>



<?php	
// --------------------------------------------DEBUT PHP--------------------------------------------
//session_start();

if(!isset($_SESSION['id']))
{

if((isset($_POST['Valider']))&&(isset($_POST['champ1']))&&(isset($_POST['champ2'])))
{

	$connexion= mysqli_connect("localhost", "root", "", "je_me_propose"); 
	$login=$_POST['champ1'];
	$query="SELECT *from utilisateurs WHERE login='$login'";
	$result= mysqli_query($connexion, $query);
	$row = mysqli_fetch_array($result);

	
	if(password_verify($_POST['champ2'],$row['password'])) 
	{
	
	$_SESSION['login'] =htmlspecialchars($_POST['champ1']);;
	$_SESSION['id'] = $row['id'];
	}
	else
	{	
	?>
	<div class="erreur">
	<img src="../img/erreur.jpg" width="2%">
	<div class="affichage">
	<?php
	echo "*Login ou mot de passe incorrect";	
	?>
	</div>
	</div>
	<?php
	}
}
// --------------------------------------------FIN PHP--------------------------------------------
?>
	
<section class="connexion">
	<div class="form-style-5">
		<form class="Formul" method="post" action="connexion.php">
		<legend>Connexion</legend>	
		<div class="input">
		<input type="text" name="champ1" placeholder="Login *">
		</div>
		<div class="input">
		<input type="password" name="champ2" placeholder="Password *">
		</div>
		<div class="input">
		<input type="submit" name="Valider" value="SE CONNECTER"/>
		</div>
		</form>
	</div>
</section>				

<?php
}
else
{
header("location: accueil.php");
}
?>	

<footer class="block-accueil">
            <ul>
                <li><a href="accueil.php">accueil</a></li>
                <li><a href="infos.php">informations</a></li>
                <li><a href="connexion.php">connexion</a></li>
                <li><a href="inscription.php">inscription</a></li>
                <li><a href="contact.php">contact</a></li>
            </ul>
        </footer>
</body>


</html>