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
			     <a href=""> <?php echo $context->firstName; ?> </a> &middot;
			     <a href=""> Users </a> &middot;
			     <a href=""> About </a>
			
			
			</div>
			<!-- <a href="../HTML/users.php">Users list</a> -->
		</div>
	</header>
	
	
	<section id="section-centrale">
	    
	<?php include($template_view); ?>
	    	 
	</section>
	
	
	<footer>
		<p> Charlie Brugvin & Alexandre Latif - Web Project S5 CERI 2015 </p>
	</footer>
	    
   
    
  </body>

</html>
