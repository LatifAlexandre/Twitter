<?php 

$_SESSION['login'] = "cici";
?>


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
			<a href="../HTML/index.php"><p id="logo">TWITTER</p></a>
			<div id="menu">
			     <a href=""> Home </a> &middot;
			     <a href="monApplication.php?action=personalProfile"> <?php echo $_SESSION['nom']; ?> </a> &middot;
			     <a href="../PUBLIC/users.php"> Users </a> &middot;
			     <a href="../PUBLIC/searchEngine.php"> Search </a>
			
			<!-- <a href="../HTML/users.php">Users list</a> -->
		</div>
	</header>
	
	
	<section id="section-centrale">
	    
	<?php include($template_view); ?>
	
	<p>///////////////////</p>
	<?php
	
	echo "<p> TEST 2</p>";

	$tab = tweetTable::getTweetsPostedBy(359);
	$tweet = $tab[0];
	
	echo "<pre>";
	echo "<h3> le tweet </h3>";
	var_dump($tweet);
	
	echo "<h3> le post du tweet </h3>";
	var_dump($tweet->getPost());
	
	echo "<h3> le parent du tweet </h3>";
	var_dump($tweet->getParent());
	
	echo "<h3> le nb de like du tweet </h3>";
	var_dump($tweet->getLikes());
	echo "</pre>";
   
	
	?>
	
	<p>///////////////////</p>
	    	 
	</section>
	
	
	<footer>
		<p> Charlie Brugvin & Alexandre Latif - Web Project S5 CERI 2015 </p>
	</footer>
	    
   
    
  </body>

</html>
