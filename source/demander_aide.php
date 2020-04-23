<?php 


include "fonction_demandeur.php";



?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Demander de l'aide</title>
	<link rel="stylesheet" type="text/css" href="../css/demande_aide.css">
</head>
<body>
    <header>
        <?php
        include "header.php";
        securiter();
        ?>
    </header>
	<main>
		<h1>Demandez de l'aide</h1>
		<form method="post" action="">
		<!-- Département -->
		<label for="Region">Votre région</label>
        <select name="Region" id="Region">
            <option value="Grand-Est">Grand-Est</option>
            <option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
            <option value="Auvergne-Rhône-Alpes">Auvergne-Rhône-Alpes</option>
            <option value="Bourgogne-Franche-Comté">Bourgogne-Franche-Comté</option>
            <option value="Bretagne">Bretagne</option>
            <option value="Centre-Val de Loire">Centre-Val de Loire</option>
            <option value="Corse">Corse</option>
            <option value="Hauts-de-France">Hauts-de-France</option>
            <option value="Ile-de-France">Ile-de-France</option>
            <option value="Occitanie">Occitanie</option>
            <option value="Normandie">Normandie</option>
            <option value="pays de la Loire">Pays de la Loire</option>
            <option value="Provence-Alpes-Côtes d'Azur">Provence-Alpes-Côtes d'Azur</option>
        </select><br/>
        <!-- Date -->
        <label for="Date_dispo">Date de demande d'aide</label>
        <input type="date" id="Date_dispo" name="Date_dispo"><br/>
        <!-- Heure -->
        <label for="Heure_dispo">Heure de demande d'aide</label>
       <select name="Heure_dispo" type="number">
            <option value="0">00:00</option>
            <option value="1">01:00</option>
            <option value="2">02:00</option>
            <option value="3">03:00</option>
            <option value="4">04:00</option>
            <option value="5">05:00</option>
            <option value="6">06:00</option>
            <option value="7">07:00</option>
            <option value="8">8:00</option>
            <option value="9">9:00</option>
            <option value="10">10:00</option>
            <option value="11">11:00</option>
            <option value="12">12:00</option>
            <option value="13">13:00</option>
            <option value="14">14:00</option>
            <option value="15">15:00</option>
            <option value="16">16:00</option>
            <option value="17">17:00</option>
            <option value="18">18:00</option>
            <option value="19">19:00</option>
            <option value="20">20:00</option>
            <option value="21">21:00</option>
            <option value="22">22:00</option>
            <option value="23">17:00</option>
        </select><br/>
        <!-- Raisons -->
        <label for="Raisons">Raison</label><br/>
        <textarea></textarea>
        <input type="submit" name="validation_help" value="validé">
	</form>
    <?php
    recherche();
    ?>
	</main>
	
</body>
</html>