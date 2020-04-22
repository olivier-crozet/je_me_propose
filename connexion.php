<header>
	<?php include "header.php"; ?>
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
	$login= htmlspecialchars($_POST['login']);	
	$_SESSION['login'] = $_POST['champ1'];
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
	
<section>
	<div class="form-style-5">
		<form method="post" action="connexion.php">
		<fieldset>
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
		</fieldset>
		</form>
	</div>
</section>				

<?php
}
else
{
header("location: header.php");
}
?>	
</body>


</html>