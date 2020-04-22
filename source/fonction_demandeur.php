<?php 
session_start();


function recherche()
{
	if (isset($_POST['validation_help']))
	 {
	 	$region = $_POST['Region'];
	 	//date actuel
	 	$datetoday = date("Y-m-d H:i:s");
	 	//date actuel en timestamp
	 	$today = strtotime($datetoday);
	 	var_dump($datetoday);
	 	//heure par valeur
	 	$heure =$_POST['Heure_dispo'];
	 	var_dump($_POST['Heure_dispo']);
	 	//conversion de l'heure en timestamp
	 	$date = $_POST['Date_dispo'];
	 	$datestamp = strtotime($date);
	 	$connexion=mysqli_connect("localhost","root","","je_me_propose");
	 	$requette_cherche = "SELECT login, age , sexe, region, tel, ville FROM utilisateurs WHERE region = '$region' or 'heure_dispo' LIKE '%".$heure."%' or  'date_st' LIKE '%".$datestamp."%' ";
	 	$fusion_requette_cherche =mysqli_query($connexion,$requette_cherche);
	 	var_dump($requette_cherche);
	 	var_dump($fusion_requette_cherche);
	 	
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