<html>

<?php

if (!isset($_SESSION['id'])) {
?>

	<head>
		<link href="inscription.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/inscription.css">
		<link rel="stylesheet" type="text/css" href="../css/accueil.css">
		<link rel="icon" type="image/png" href="../pics/icon/jeMePropose.png">
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
		<title>Inscription</title>
		<meta charset="UTF-8">
	</head>

	<body class="inscription">

		<div class="header-logo-title">
			<img src="../pics/icon/jeMePropose.png" alt="je me propose logo" title="Site d'entraide">
			<h1>Je-me-propose.com</h1>
		</div>

		<header class="block-accueil">
			<?php include "../source/header.php";  ?>

		</header>



		<?php
		// --------------------------------------------DEBUT PHP--------------------------------------------

		if (!empty($_POST['Valider'])) {
			$connexion = mysqli_connect("localhost", "root", "", "je_me_propose");
			$login = $_POST['champ1'];
			$req = "SELECT  *from utilisateurs WHERE login='$login'";
			$query = mysqli_query($connexion, $req) or die(mysqli_error($connexion));
			$result = mysqli_num_rows($query);

			if ((($_POST['champ2'] != $_POST['champ3']) || ($result > 0)) || (strlen($_POST['champ2']) < 5)) {
				if (($_POST['champ2'] != $_POST['champ3']) && ($result > 0)) {
		?>
					<div class="erreur">
						<img src="../img/erreur.jpg" width="2%">
						<div class="affichage">
							<?php
							echo "*Mots de passes rentrés différents";
							?>
						</div>
						<div class="affichage">
							<?php
							echo "*Veuillez renseigner un autre login";
							mysqli_close($connexion);
							?>
						</div>
					</div>
				<?php
				} else if ((strlen($_POST['champ2']) < 5) && ($result > 0)) {
				?>
					<div class="erreur">
						<img src="../img/erreur.jpg" width="2%">
						<div class="affichage">
							<?php
							echo "*Veuillez renseigner un autre login";
							?>
						</div>
						<div class="affichage">
							<?php
							echo "*Mots de passes trop courts";
							echo " 5 caractères minimum";
							mysqli_close($connexion);
							?>
						</div>
					</div>
				<?php
				} else if ($result > 0) {
				?>
					<div class="erreur">
						<img src="../img/erreur.jpg" width="2%">
						<div class="affichage">
							<?php
							echo "*Veuillez renseigner un autre login";
							?>
						</div>
					</div>
				<?php
					mysqli_close($connexion);
				} else if ($_POST['champ2'] != $_POST['champ3']) {
				?>
					<div class="erreur">
						<img src="../img/erreur.jpg" width="2%">
						<div class="affichage">
							<?php
							echo "*Mots de passes rentrés différents";
							mysqli_close($connexion);
							?>
						</div>
					</div>
				<?php
				} else if (strlen($_POST['champ2'] < 5)) {
				?>
					<div class="erreur">
						<img src="../img/erreur.jpg" width="2%">
						<div class="affichage">
							<?php
							echo "*Mots de passes trop courts";
							echo " 5 caractères minimum";
							mysqli_close($connexion);
							?>
						</div>
					</div>
		<?php
				}
			} else {

				$hash = password_hash($_POST['champ2'], PASSWORD_BCRYPT, ['cost' => 12]);
				$connexion = mysqli_connect("localhost", "root", "", "je_me_propose");
				$login = htmlspecialchars($_POST['champ1']);
				$age = htmlspecialchars($_POST['champ4']);
				$Sexe = htmlspecialchars($_POST['champ5']);
				$region = htmlspecialchars($_POST['champ6']);
				$tel = htmlspecialchars($_POST['champ7']);
				$ville = htmlspecialchars($_POST['champ8']);
				$image_par_defaut = "../profilPics/profil.jpg";
				$req2 = "INSERT INTO utilisateurs(login,password,age,sexe,region,tel,ville,profilPic)VALUES
			('$login','$hash',$age,'$Sexe','$region','$tel','$ville','$image_par_defaut')";

				mysqli_query($connexion, $req2);
				mysqli_close($connexion);
				header('Location: connexion.php');
			}
		}
		// --------------------------------------------FIN PHP--------------------------------------------
		?>



		<section class="inscription-section-mt">
			<div class="form-style-5">
				<form class="inscription-form-ajust" method="post" action="inscription.php">
					
						<legend>Inscrivez-vous</legend>




						<div class="input">
							<input type="text" name="champ1" placeholder="Login *">
						</div>
						<div class="input">
							<input type="password" name="champ2" placeholder="Password *">
						</div>
						<div class="input">
							<input type="password" name="champ3" placeholder="Confirm Password *">
						</div>
						<div class="input">
							<input type="text" name="champ4" placeholder="Age *">
						</div>
						<div class="input">
							<select name="champ5">
								<option value="Homme">Homme</option>
								<option value="¨Femme">Femme</option>
							</select>
						</div>
						<div>
							<p>Sélectionnez vôtre région :</p><br />
							<select name="champ6" size="1">
								<option value="Auvergne-Rhône-Alpes">Auvergne-Rhône-Alpes</option>
								<option value="Bourgogne-Franche-Comté">Bourgogne-Franche-Comté</option>
								<option value="Bretagne">Bretagne</option>
								<option value="Centre-Val-de-Loire">Centre-Val-de-Loire</option>
								<option value="Corse">Corse</option>
								<option value="Grand-est">Grand-Est</option>
								<option value="Hauts-de-France">Hauts-de-France</option>
								<option value="Ile-de-france">Île-de-France</option>
								<option value="Normandie">Normandie</option>
								<option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
								<option value="Occitanie">Occitanie</option>
								<option value="Pays-de-la-loire">Pays de la Loire</option>
								<option value="Provence-Alpes-Côte">Provence-Alpes-Côte d'Azur</option>
							</select>
						</div>

						<br />
						<div class="input">
							<input type="text" name="champ7" placeholder="Numéro de téléphone *">
						</div>
						<div class="input">
							<input type="text" name="champ8" placeholder="Ville *">
						</div>

						<div class="input">
							<input type="submit" name="Valider" value="S'INSCRIRE" />
						</div>
					
				</form>
			</div>
		</section>


	</body>

<?php
} else {
	header('location: ../index.php');
}
?>

</html>