


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
	
	
	
	<section id="section-centrale">
	</section>
   	
	<script src="jquery-1.9.1.min.js"> </script>

	<script>
	$(document).ready(function(){
	  
	  // LES LIENS

	  $(document).delegate('a', 'click', function(e){
	  	e.preventDefault(); //on desactive la redirection
	  	var href= $(this).attr('href'); //on recupere le lien complet du a cliqué
	  	var varGet = href.split('?')[1]; // on recupere la partie après le '?', soit les variables get

	    $("#section-centrale").load('monAjax.php', varGet.replace('&', ', '));
	  });

	   // LES SUBMIT DES FORMULAIRES

	  $(document).delegate('input:submit', 'click', function(e){
	  	e.preventDefault();

	  	alert('okkkkkkkkkkkkk');
	  	var action= $('form').attr('action'); //on recupere le lien complet du a cliqué
	  	var varGet = action.split('?')[1]; 

	  	//on charge la page
		$("#section-centrale").load('monAjax.php', varGet.replace('&', ', '));

		$.fn.form = function() {
		    var formData = {};
		    this.find('[name]').each(function() {
		        formData[this.name] = this.value;  
		    })
		    return formData;
		};

		// use like
		var data = $('#formulaire-inscription').form();

	    alert('bonjour : ' data);

	  	$.post('monAjax.php?'.concat(varGet), { nom: 'brubru', prenom: 'chacha', identifiant: 'walwal', pass: 'azerty', file: 'NONE'},
   		function(data) {
     	alert(data);
   		});
	  });

	});
	</script>
	
	<footer>
		<p> Charlie Brugvin & Alexandre Latif - Web Project S5 CERI 2015 </p>
	</footer>
    
  </body>

</html>
