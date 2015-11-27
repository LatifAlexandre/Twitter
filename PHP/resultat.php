<!-- CHARLIE BRUGVIN uapv1402561 -->
<!-- en binome avec ALEXANDRE LATIF uapv1404039 -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>titre</title>
		<link rel="stylesheet" href="../CSS/style.css"/>
		<meta name="nom" content="Latif/Brugvin"/>
		<meta name="prenom" content="Alexandre/Charlie"/>
		<meta name="uapv" content="1402561/1404039"/>
		<meta name="description" content="description"/>
	</head>
	<body>
		<?php include("../HTML/header.php"); ?>
		
		<section id="section-centrale">

			<?php
			
			//GESTION DU FORMULAIRE
			$nom = $_REQUEST["nom"];
			$prenom = $_REQUEST["prenom"];
			//avec la méthode GET, les formulaire entré sont affiché dans l'url, ce qui n'est pas top pour cacher un mot de passe

			if ($nom == "")
			{
				echo '<p id="message-erreur"> ERROR : Please enter your last name </p>';
			}
			
			if ($prenom == "") //public_html/HTML/index.html
			{
				echo '<p id="message-erreur"> ERROR : Please enter your first name </p>';
			}
			
			if($_FILES['avatar']['error'] > 0) $erreur = "Image transfer Error"; //on affiche une erreur si le fichier n'est pas transféré
			
			if ($nom != "" && $prenom != "")
			{
				//BASE DE DONNE
				
				//connexion
				$connexion = new PDO('pgsql:host=localhost;dbname=L3', 'uapv1404039', '03obK8'); //MOT DE PASSE 03obK8 QQj2lP
				
				if ($connexion == false)
				{
					echo '<p id="message-erreur"> ERROR : Connection to data base not possible </p>';
				}
				else
				{
				   echo "Successfully connected to server, ";
				   
				   //-------------- TRAITEMENT IMAGE -------------------
				   $nom_fichier = md5(uniqid(rand(), true)); // créer un nom aléatoire
				   $emplacement = "../user_avatars/".$nom_fichier; // choisir l'emplacement (on peut définir cette variable au début de notre php
               $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'],$emplacement); // on transfert l'image de la mémoire temporaire à notre sérveur (fichier user-avatars) ..... move_uploaded_files renvoie un booléen
               if ($resultat) echo "Image transfer done<br>"; //
               else echo "Image transfer not done<br>";
               //--------------------------------------
				   
				   $sql = "INSERT INTO personnes(nom, prenom, avatar) VALUES('".$nom."','".$prenom."','".$nom_fichier."');";
				   
					if($connexion->query($sql))
				   {
						echo "Query done";
					 	echo "<p> Morning $prenom $nom.</p>";
				   }
			      		
			      else  echo "Query not done\n";
				
			  	}			
			}
			?>

			<a href="../HTML/index.php"> Revenir a l'index </a>

		</section>
		
		<?php include("../HTML/footer.php"); ?>
	</body>
</html>
