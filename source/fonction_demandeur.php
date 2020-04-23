<?php 



function recherche()
{
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
	 	$connexion=mysqli_connect("localhost","root","","je_me_propose");
	
	 	$requette_cherche = "SELECT u.login, u.age , u.sexe, u.ville, u.tel, d.region, d.date_dispo, d.heure_dispo, d.description  FROM utilisateurs as u  INNER JOIN dispo as d WHERE  d.region = '$region' AND d.date_dispo > now() ";


	 	$fusion_requette_cherche =mysqli_query($connexion,$requette_cherche);
	 	//metre tous les resultat dans un tableau
	 	$result = mysqli_fetch_all($fusion_requette_cherche);
	 	
	 	//nombre de resultat bdd
	 	$compte = mysqli_num_rows($fusion_requette_cherche);
	 	?>
	 	<table>
	 	<thead>
	 		<tr>age</tr><tr>sexe</tr><tr>ville</tr><tr>tel</tr><tr>region</tr><tr>date</tr><tr>heure</tr><tr>description</tr>
	 	</thead>
	 	<?php
	 	for ($i=0; $i < $compte ; $i++) 
	 	{ 
	 		echo "<tr>";
	 		echo "<td>".$result[$i][1],$result[$i][2],$result[$i][3],$result[$i][4],$result[$i][5],$result[$i][6].$result[$i][7],$result[$i][8]."</td>";
	 		echo "</tr>";
	 	}
	 	?>
	 	</table>
	 	<?php


	}



}





//$search=$_GET['search'];


//$research="SELECT id, nom_pok FROM pokemon WHERE nom_pok LIKE '%".$search."%' or type1_pok LIKE '%".$search."%' or  type2_pok LIKE '%".$search."%' ORDER BY id ASC";
//$resultat_research=mysqli_query($base, $research);
//$element=mysqli_num_rows($resultat_research);


//if($element > 0)
//{
//	while($data = mysqli_fetch_assoc( $resultat_research)) {	
//	    	$json[] = $data;
//		}
//	 echo json_encode($json);
 //}



function securiter()
{
	if (!isset($_SESSION['id'])) 
	{
		header("location: connexion.php");	 
	}
}
?>