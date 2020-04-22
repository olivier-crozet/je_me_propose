<?php


//////////////FONCTION DE SECURITER
function securiter()
{
	if (!isset($_SESSION['id'])) 
	{
		header("location: connexion.php");	 
	}
}



?>