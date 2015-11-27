<!-- CHARLIE BRUGVIN uapv1402561 -->
<!-- en binome avec ALEXANDRE LATIF uapv1404039 -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>user</title>
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
			
			$connexion = new PDO('pgsql:host=localhost;dbname=L3', 'uapv1404039', '03obK8'); //MOT DE PASSE 03obK8 QQj2lP
			
			//traitement suppression
			if ($_GET[option] == 's')
			{
			   $resultat = $connexion->query("DELETE FROM personnes WHERE id = $_GET[userID]");
			   $resultat->closeCursor();
			}
			
			if ($_GET[option] == 'm-bis')
			{
				//traitement du formulaire de modification remplis
				
				$nom = $_POST["M_nom"];
				$prenom = $_POST["M_prenom"];
				$avatar = $_POST["M_avatar"];

				//UPDATE liste_proprietaire SET adresse="3, rue des tulipes", age="65" WHERE nom="Benoît";
				$resultat = $connexion->query("UPDATE personnes SET nom='$nom', prenom='$prenom', avatar='$avatar' WHERE Id='".$_GET[userID]."'");
			   	//$resultat->closeCursor();
			}


			
			
			
			$resultat = $connexion->query("SELECT * FROM personnes ORDER BY id;");
			$resultat->setFetchMode(PDO::FETCH_ASSOC);
			
			echo "<table>";
			echo "<tr> <th>Id</th>  <th>Last Name</th>  <th>First Name</th>  <th>Avatar</th>  </tr>";
			while($ligne = $resultat->fetch())
			{
			   //si il faut affihcer le formulaire de modif
			   if ($_GET[option] == 'm' && $_GET[userID] == $ligne[id])
			   {
			      	echo "<form id='form-modif-user' method='POST' action='users.php?option=m-bis&userID=".$ligne[id]."'>";
			     	   echo "<td> $ligne[id] </td>";
				   echo "<td> <input type='text' name='M_nom' id='M_nom' /> </td>";
				   echo "<td> <input type='text' name='M_prenom' id='M_prenom' /> </td>";
				   echo "<td> Image </td>";
				   echo "<td class='bouton-option'> <input type='submit' value='VALIDER' /> </td>";
				   echo "<td> <a href='users.php'> ANNULER </a> </td>";
				   echo "</form>";
			   }
			   //sinon on affiche la ligne normal
			   else
			   {
				   echo "<tr>";
				   echo "<td> $ligne[id] </td>";
				   echo "<td> $ligne[nom] </td>";
				   echo "<td> $ligne[prenom] </td>";
				   echo "<td> Image </td>";
				   //options
				   echo "<td> <a href='users.php?option=m&userID=".$ligne[id]."'> MODIFIER </a> </td>";
				   echo "<td> <a href='users.php?option=s&userID=".$ligne[id]."'> SUPPRIMER </a> </td>";
				   echo "</tr>";
				}
			}
			echo "</table>";
			
			$resultat->closeCursor();
			?>
		</section>
		
		<?php include("footer.php"); ?>
	</body>
</html>
