<div>

	<h1> Sign in </h1>


	<form id="formulaire-inscription" method="post" action="monApplication.php?action=inscriptionTraitement" enctype="multipart/form-data">
		<label for="nom">Last name&nbsp;</label> <input type="text" name="nom" id="nom" /><br>
		<label for="prenom">First name</label> <input type="text" name="prenom" id="prenom" /><br>
		<label for="identifiant">Identifiant</label> <input type="text" name="identifiant" id="identifiant" /><br>
		<label for="pass">Password</label> <input type="password" name="pass" id="pass" /><br>
		<input type="file" name="avatar" id="avatar"/><br>
		<input type="submit" value="Sign in" />
	</form>

</div>

<?php 
/*
//on regarde si l'utilisateur existe avec la fonction getUserByLoginAndPass()

if (isset($_REQUEST['login']))
	$login = $_REQUEST['login'];
if (isset($_REQUEST['password']))
	$password = $_REQUEST['password'];

//si il n'existe pas
if (!utilisateurTable::getUserByLoginAndPass($login, $password))
{
	echo "Nom d'utilisateur ou mot de passe incorect wesh\n";
}
else //si il existe
{
	context::setSessionAttribute("nom", 	$_REQUEST['nom']);
	context::setSessionAttribute("prenom", 	$_REQUEST['prenom']);
	context::setSessionAttribute("login", 	$_REQUEST['login']);
	context::setSessionAttribute("password",$_REQUEST['password']);
}
*/
?>

