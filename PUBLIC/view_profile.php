<!-- CHARLIE BRUGVIN uapv1402561 -->
<!-- en binome avec ALEXANDRE LATIF uapv1404039 -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>inscription</title>
		<link rel="stylesheet" href="../CSS/style.css">
		<meta name="nom" content="Brugvin">
		<meta name="prenom" content="Charlie">
		<meta name="uapv" content="1402561">
		<meta name="description" content="Première page qui permet d'enregistrer un utilisateur">
	</head>
	<body>
		<?php include("header.php"); ?>

		<section id="section-centrale">
		<?php
		$connexion = new PDO('pgsql:host=localhost;dbname=L3', 'uapv1404039', '03obK8'); //MOT DE PASSE 03obK8
		
		$resultat = $connexion->query("SELECT * FROM personnes WHERE id= $_GET[userID]");
		$resultat->setFetchMode(PDO::FETCH_ASSOC);
		$ligne = $resultat->fetch();
	        //$nom = $connexion->query("SELECT nom FROM personnes WHERE id = $_GET[userID]");
	        echo "<h1>".$ligne[prenom]." ".$ligne[nom]."'s profile</h1>";
		?>	
		</section>
		
		<?php include("footer.php"); ?>
	</body>
</html>
