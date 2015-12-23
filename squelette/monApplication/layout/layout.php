


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
			
			<a href="monApplication.php"> <p id="logo">TWITTER</p> </a>
			
			<div id="menu">
			   
			     <?php
			     //seulement si la session est ouverte
			     if (isset($_SESSION['user']))
			     {
			        echo "<span>bonjour ".$_SESSION['user']->prenom." ".$_SESSION['user']->nom.  " !</span>";
			        //personal profile
			        echo "<a href='monApplication.php?action=personalProfile'> Profile </a> &middot;";
			        //deconnexion
		                echo "<a href='monApplication.php?action=deconnexion'> Déconnexion </a> &middot;";
			        
			     }
			     else
			     {
			        //lien vers connexion / inscription
			         echo "<a href='monApplication.php?action=connexion'> Connexion </a>&middot;";
			         echo "<a href='monApplication.php?action=inscription'> Inscription </a>&middot;";
			     }
			     ?>
			     
			     <a href="monApplication.php?action=users"> Users </a> &middot;
			     <a href="../PUBLIC/searchEngine.php"> Search </a>
			</div>
			
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
   
   					
   	var_dump(utilisateurTable::getUserById(666));
   	
   	
   	?>
   	
   	
	<?php include($template_view); ?>
	

	    	 
	</section>
	
	
	<footer>
		<p> Charlie Brugvin & Alexandre Latif - Web Project S5 CERI 2015 </p>
	</footer>
	    
   
    
  </body>

</html>
