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
			<h1>Inscription Form</h1>

			<!-- en utilisant la variable PHP $_REQUEST, je peux recuperer mes variables post, qui est la méthode d'envoi de mon formulaire. Mais si j'édite l'url après l'envoi, je peux ajouter dans l'url le formulaire, comme l'aurais fait un GET. la variable REQUEST passera automatiquement de la méthode a l'autre car elle contient les variable GET et POST -->
			<form id="formulaire-inscription" method="post" action="../PUBLIC/resultat.php?nom=&prenom=" enctype="multipart/form-data">
				<label for="nom">Last name&nbsp;</label> : <input type="text" name="nom" id="nom" />
				<label for="prenom">First name</label> : <input type="text" name="prenom" id="prenom" />
				<label for="login">Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> : <input type="text" name="login" id="login" />
				<label for="password">Password</label> : <input type="password" name="password" id="password" />
				<input type="file" name="avatar" id="avatar"/>
				<input type="submit" value="Submit" />
			</form>
		</section>
		
		<?php include("footer.php"); ?>
	</body>
</html>
