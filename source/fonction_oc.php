<?php 

function suprime()
{
	if (!empty($_POST['deco']))
	 {
		session_destroy();
		header("location:accueil.php");
	
	}
	
}

function affichage_rofil()
{
	$id = $_SESSION['id'];
	$connexion=mysqli_connect("localhost","root","","je_me_propose");
	$requette_user = "SELECT login, age, sexe, region, ville, tel FROM utilisateurs where id = $id";
	$execute = mysqli_query($connexion,$requette_user);
	$infos_user = mysqli_fetch_all($execute);
	echo "Login : ".$infos_user[0][0]."</br>";
	echo "Age : ".$infos_user[0][1]."</br>";
	echo "Sexe : ".$infos_user[0][2]."</br>";
	echo "Region : ".$infos_user[0][3]."</br>";
	echo "Ville : ".$infos_user[0][4]."</br>";
	echo "Telephone : ".$infos_user[0][5]."</br>";
}


function affichage_foto()
{
	if(isset($_SESSION['id']) AND $_SESSION['id'] > 0)
   {     
   	$id = $_SESSION['id'];

		$reqimg = ("SELECT profilPic FROM utilisateurs WHERE id = $id");
   }
    else
    {   
		$reqimg = ("SELECT profilPic FROM utilisateurs WHERE id =".$_SESSION["id"]);
    }
    $connexion=mysqli_connect("localhost","root","","je_me_propose");
    $reqimgco = mysqli_query($connexion,$reqimg);
    var_dump($reqimgco);
    $imgrecup = mysqli_fetch_array($reqimgco);
	  if (!empty($imgrecup[0])) 
	  {
?>
     <img class = "oc-img-profil" src="<?php echo $imgrecup[0] ; ?>" > 
<?php
     }
	 else
	 {  ?>
       <img class = "oc-img-profil" src="profilPics/profil.jpg" >
           <?php
	 }
}

function modif_profil()
{
 if (!empty($_POST['modif']))
       {       
       if (!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['password2'])) 
       {               
            if (($_POST['password']) == ($_POST['password2']))  
                 {             
                  $login= htmlspecialchars($_POST["login"]);
                  $password= password_hash($_POST["password"], PASSWORD_DEFAULT,array('cost'=> 12));
                  $reqdoublon = "SELECT pseudo FROM `utilisateurs` where pseudo =\"$login\";";
                  $req=mysqli_query($connexion,$reqdoublon); 
                  $retour=mysqli_num_rows($req);

                           if($retour==0)
                           {             
                              if (isset($_POST['image'])) 
                              {
                                $ocnewimg = $_POST['image'];
                              }
                                      
                           $requeteupdate ="UPDATE utilisateurs SET pseudo = '$login' , mdp = '$password' WHERE id='$id'";        
                             $inser= mysqli_query($connexion,$requeteupdate);
                             header("location: profil.php?id=".$id_user_profil."");
                          } 
                          else
                          {
                            echo "ce login existe deja !";
                          }
               }
               else
               {
                echo "les passwords ne sont pas identiques !";
               }
    }
  else
  {
    echo "tous les champs doivent etre complétés !";
  }
}
}

function modif_image_profil()
{
if (isset($_FILES['image']))
                                { 
                                 
                                   $taillemax = 2097152 ;  
                                   $extensionvalide = array('jpg', 'jpeg', 'gif', 'png');  
                                     if ($_FILES['image']['size'] <= $taillemax)
                                      { 
                                        // met tous les carractere en minuscule                                    1=limite de chaine
                                         $extensionupload = strtolower(substr(strchr($_FILES['image']['name'],'.'), 1));
                                         //verif extention
                                             if (in_array($extensionupload, $extensionvalide)) 
                                             {
                                               $chemin = "../profilPics/".".".$_SESSION['id'].".".$extensionupload;
                                               $couenta = move_uploaded_file($_FILES['image']['tmp_name'], $chemin);
                                                    if ($couenta)
                                                     {
                                                      $connexion=mysqli_connect("localhost","root","","forum");

                                                     	$id = $_SESSION['id'];
                                                      $requeteupdate ="UPDATE utilisateurs SET  profilPic = '$chemin'  WHERE id='$id'"; 
                         
                                                      $inser= mysqli_query($connexion,$requeteupdate);

                                                      header("location: profil.php");


                ///////////////////////////////////////verif l'identité pour modifier le profil////////////////////////////////////////
                                                      $connexion=mysqli_connect("localhost","root","","forum");
                                                      $id_user = $_SESSION['id'];
                                                      $requette_id = "SELECT id FROM utilisateurs where id = $id_user ";
                                                      $requette_id_connexion = mysqli_query($connexion,$requette_id);
                                                      $result_id = mysqli_fetch_assoc($requette_id_connexion);
      
                                                      $id_user_profil = $result_id['id'];
                                                      header("location: profil.php?id=".$id_user_profil."");

                                                     }
                                                     else
                                                     {
                                                       echo "erreur lors du telechargement !";
                                                     }
                                             }
                                             else
                                             {
                                              echo "votre imga doit etre au format jpg, jpeg, gif, png";
                                             }
                                      }
                                      else
                                      {
                                        echo "votre foto ne doit pas depasser 2 mo";
                                      }
                                        }   
                                 //fin avatar  

                                    
	                            
}
?>