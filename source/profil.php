<?php

?>

<html>
	<head>
		   <meta charset="utf-8">
		 <link rel="stylesheet" type="text/css" href="">
		  <link rel="stylesheet" type="text/css" href="../css/header.css">
		 <title>profil</title>
	</head>
		
	<body class="oc-body-accueil-btp">
  
				<?php include('header.php'); 
        include('fonction_profil.php');
        ?>  

    <section class="section-deventure">    
		<div>
       <?php 

      affichage_foto();
      ?>
    </div>

    <div>
      <?php 

      affichage_profil();
      ?>
    </div>
<form class="form" method="POST" action="" enctype="multipart/form-data">
  <table class="oc-tablinscri">
          <tr>
            <td>
              <label  for="login">modifier le login :</label>
        </td>
        <td>
              <input type="text" name="login" placeholder="ecrire votre pseudo" value="<?php if(isset($login)){echo $login;} ?>">
            </td>
          </tr>
           <tr>
            <td>
              <label for="image">inserer votre image de profil : </label>
            </td>
            <td>
              <input type="file" name ="avatar" placeholder="">
            </td>
          </tr>
          <tr>
              <td>
                
                <label  for="password">modifier le mot de passe :</label>
              </td>
              <td>
                <input type="password" name="password" placeholder="ecrire votre mot de passe">
              </td>
          </tr>
          <tr>
               <td>
                <label  for="newpassword2">confirmer votre mot de passe :</label>
              </td>
              <td>
                <input type="password" name="password2" placeholder="ecrire votre mot de passe">
              </td>
          </tr>
          
        </table>
        <br/>
                   <input  class="buton-inscription" type="submit" name="modif" value="modifier le profil !"/>
         </form> 
<?php

if (isset($_POST['modif'])) 
{
modif_profil($_SESSION['id']);

  //modif_image_profil();
  
}
  ?>
  
  

 </main>
     </section>
  <!--//////////////////////////////////////////////////FOOTER///////////////////////////////////////////////////////////////////////-->

 
</body>
</html>