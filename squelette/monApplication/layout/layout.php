


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
			     	<li><a href="monApplication.php?action=users"> users </a></li>
			     	<li><a href="../PUBLIC/searchEngine.php"> search </a></li>
			     </ul>

			     <?php
			     //seulement si la session est ouverte
			     if (isset($_SESSION['user']))
			     {
			     	echo "<p>bonjour ".$_SESSION['user']->prenom." ".$_SESSION['user']->nom.  " !</p>";
			     	echo "<ul id='liste-profile'>";
			        
			        //personal profile
			        echo "<li><a href='monApplication.php?action=personalProfile'> profile </a> </li>";
			        //deconnexion
		            echo "<li> <a href='monApplication.php?action=deconnexion'> deconnexion </a> </li>";
		            echo "</ul>";

			        
			     }
			     else
			     {
			        //lien vers connexion / inscription
			        echo "<ul id='liste-profile'>";
			         echo "<li> <a href='monApplication.php?action=connexion'> connexion </a> </li>";
			         echo "<li> <a href='monApplication.php?action=inscription'> inscription </a> </li>";
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
