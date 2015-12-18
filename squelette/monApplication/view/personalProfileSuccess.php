
<div id="left-column">


	<!-- on affiche le profile qu'il y a en session -->
	<div id="profile-bloc">
		<img id="profile-picture" src=" <?php echo $_SESSION['avatar']; ?> " alt=" <?php echo $_SESSION['avatar']; ?> ">
		<p id="compte-info"> <?php echo $_SESSION['nom'] . " " . $_SESSION['prenom']; ?> </p>
		<p id="statut"> Statut : <?php echo $_SESSION['statut']; ?> </p>
		
		<!-- formulaire de creation de tweets -->
		<form>
			 <label for=tweet>Tweet&nbsp;</label> : <input type=tweet name=tweet id=tweet />
			 <input type=submit value=Tweet This />
		</form>;
	</div>
      	
  	<!-- On affiche ses tweets -->
  	<?php include("../../monApplication.php?action=tweet"); ?>

</div>
