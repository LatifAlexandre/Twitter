


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <link rel="stylesheet" href="css/style.css">
   
    <title>
     Ton appli !
    </title>
   
  </head>

  <body>
        
  	<header>
		<div id="en-tete-centre">
			
			<a href="monApplication.php" class=>
				<img src="css/logo.png" alt="logo du site">
			</a>
			
			   <ul id='liste-liens'>
			     	<li><a href="monApplication.php?action=users"> Users </a></li>
			     	<li><a href="monApplication.php?action=search"> Search </a></li>
			     </ul>

			     <?php
			     //seulement si la session est ouverte
			     if (isset($_SESSION['user']) && ($_SESSION['user']->nom != null) && ($_SESSION['user']->prenom != null))
			     {
			     	echo "<p>Good Morning ".$_SESSION['user']->prenom." ".$_SESSION['user']->nom.  " !</p>";
			     	echo "<ul id='liste-profile'>";
			        
			        //personal profile
			        echo "<li><a href='monApplication.php?action=personalProfile'> Profile </a> </li>";
			        //deconnexion
		            echo "<li> <a href='monApplication.php?action=deconnexion'> Logout </a> </li>";
		            echo "</ul>";

			        
			     }
			     else
			     {
			        //lien vers connexion / inscription
			        echo "<ul id='liste-profile'>";
			         echo "<li> <a href='monApplication.php?action=connexion'> Log in </a> </li>";
			         echo "<li> <a href='monApplication.php?action=inscription'> Sign in </a> </li>";
			         echo "</ul>";
			     }
			     ?>
			     
			     
			
			<!-- <a href="../HTML/users.php">Users list</a> -->
		</div>
	</header>
	
	
	
	<section id="section-centrale">
   	
   	<?php
   	
   	
   	
   	$value = array(
   	                                       /*
   					'id' => '213',
   					'identifiant' => 'waldo',
   					'pass' => 'azerty',
   					'nom' => 'brugvin',
   					'prenom' => 'charlie',
   					'statut' => 'voici mon satut',
   					'avatar' => 'testAvatar',	*/
   					);
   
   					
   	//var_dump(utilisateurTable::getUserById(666));
   	
   	
   	?>
   	
   	
	<?php include($template_view); ?>
	

	    	 
	</section>
	
	
	<footer>
		<p> Charlie Brugvin & Alexandre Latif - Web Project S5 CERI 2015 </p>
	</footer>
	    
   
    
  </body>

</html>
