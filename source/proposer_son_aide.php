<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Je propose mon aide</title>
	<link rel="stylesheet" type="text/css" href="../css/proposer_mon_aide.css">
</head>
<body>
	<main>
		<h1>Je propose mon aide</h1>
		<form>
		<!-- Département -->
		<label for="Region">Votre région</label>
        <select name="Region" id="Region">
            <option value="">Grand-Est</option>
            <option value="">Nouvelle-Aquitaine</option>
            <option value="">Auvergne-Rhône-Alpes</option>
            <option value="">Bourgogne-Franche-Comté</option>
            <option value="">Bretagne</option>
            <option value="">Centre-Val de Loire</option>
            <option value="">Corse</option>
            <option value="">Hauts-de-France</option>
            <option value="">Ile-de-France</option>
            <option value="">Occitanie</option>
            <option value="">Normandie</option>
            <option value="">Pays de la Loire</option>
            <option value="">Provence-Alpes-Côtes d'Azur</option>
        </select><br/>
        <!-- Date -->
        <label for="Date_dispo">Date de disponibilité</label>
        <input type="date" id="Date_dispo" name="Date_dispo"><br/>
        <!-- Heure -->
        <label for="Heure_dispo">Heure de disponibilité</label>
        <select>
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
        <select>
        	<option>Course</option>
        	<option>Promenade</option>
        	<option>Toilette</option>
        	<option>Tâches ménagères</option>
        	<option>Préparation repas</option>
        	<option>Aide à la prise des repas</option>
        	<option>Aide au lever et au coucher</option>
        	<option>Présence de nuit</option>
        </select>
        
	</form>
	</main>
</body>
</html>