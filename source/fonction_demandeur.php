<?php 



function recherche()
{
	$_SESSION["id"]=1;
	if (isset($_POST['validation_help']))
	 {
	 	$region = $_POST['Region'];
	 	//date actuel
	 	$datetoday = date("Y-m-d H:i:s");
	 	//date actuel en timestamp
	 	$today = strtotime($datetoday);
	
	 	//heure par valeur
	 	$heure =$_POST['Heure_dispo'];
	 	
	 	//conversion de l'heure en timestamp
	 	$date = $_POST['Date_dispo'];
	 	$datestamp = strtotime($date);
	 	//connexion bdd
	 	$connexion=mysqli_connect("localhost","root","","je_me_propose");
	 	//requette joignan le deux table
	 	$requette_cherche = "SELECT u.login, u.age , u.sexe, u.ville, u.tel, d.region, d.date_dispo, d.heure_dispo, d.description  FROM utilisateurs as u  INNER JOIN dispo as d WHERE  d.region = '$region' AND d.date_dispo > now() ";
	 
	 	$fusion_requette_cherche =mysqli_query($connexion,$requette_cherche);
	 	//metre tous les resultat dans un tableau
	 	$result = mysqli_fetch_all($fusion_requette_cherche);
	 	
	 	//nombre de resultat bdd
	 	$compte = mysqli_num_rows($fusion_requette_cherche);
	 	/////////affichage des donner
	 	for ($i=0; $i < $compte ; $i++) 
	 	{ 
	 		
	 		echo "<tr class'tab_css'><td class'tab_css'>".$result[$i][0].$result[$i][1],$result[$i][2],$result[$i][3],$result[$i][4],$result[$i][5],$result[$i][6].$result[$i][7],$result[$i][8]."</td></tr>";
	 		
	 	}

	}
}

//////////////securise la page//////////

function securiter()
{
	if (!isset($_SESSION['id'])) 
	{
		header("location: connexion.php");	 
	}
}
?>