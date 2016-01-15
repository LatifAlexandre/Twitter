


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

			<a href="monApplication.php?action=index">
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
			        echo "<li><a href='monApplication.php?action=userProfile'> Profile </a> </li>";
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
	
	<div id='bandeau-notif'>
		Nouveaux Tweets !
	</div>
	
	<section id="section-centrale">
		
		<!-- <button id="but"> WESH </button> -->

		<div id='demo'> </div>
		
		
		<?php include($template_view); ?>
	</section>
	
	
   	
   	
	<script src="jquery-1.9.1.min.js"> </script>

	<script>

	$(document).ready(function(){
		

		var tempsUpdate = 4000; // le temps entre 2 refresh en ms

		$('#bandeau-notif').hide();

		setTimeout(tweetUpdate,tempsUpdate);

		/*
		$("#but").click(function(){
			$('#bandeau-notif').slideToggle("slow");
			//setTimeout(tweetUpdate,4000);
			tweetUpdate();
		});*/
		
		function tweetUpdate()
		{
			
			setTimeout(tweetUpdate,tempsUpdate);

			
			//on créé une chaine contenant la date actuelle
			var d = new Date();
			var y = d.getFullYear();
			var mo = d.getUTCMonth()+1;
			if (mo < 10) mo = '0'+mo;
			var da = d.getUTCDate();
			if (da < 10) da = '0'+da;
			var h = d.getHours();
			if (h < 10) h = '0'+ h;
			var m = d.getMinutes();
			if (m < 10) m = '0'+ m;
			var s = d.getSeconds();
			if (s < 10) s = '0'+ s;
			//var now = '2016-01-15 12:38:22' ;
 			var now = y +"-" + mo + "-" + da + " " +  h + ":" + m + ":" + s;

			//on appelle la foncton tweetByDate, et on recupere sa view
			$.ajax({
		       url : 'monAjax.php?',
		       type : 'GET',
		       data : 'action=tweetByDate' + '&date=' + now,
		       dataType : 'html', // On désire recevoir du HTML
		       success : function(code_html, statut){ 
		        // code_html contient le HTML renvoyé

		        //si on detecte la view error, il n'y a pas de nouveaux tweets
		        if (code_html != 'ERROR\n')
		        {
		        	alert("nouveau tweet");
		        	$('#bandeau-notif').slideToggle("slow");
					setTimeout(closeBandeauNotif, 2000);

		        	$( "#section-centrale" ).prepend( code_html );
		        }

		       }
		    });
		};

		function closeBandeauNotif()
		{
			$('#bandeau-notif').slideToggle("slow");
		}
	});

	  
	</script>
	
	<footer>
		<p> Charlie Brugvin & Alexandre Latif - Web Project S5 CERI 2015 </p>
	</footer>
    
  </body>

</html>
