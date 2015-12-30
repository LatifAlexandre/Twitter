<?php
	/*
	$profilePicture = $context->profilePicture;
	$identifiant = $context->identifiant;
	$tweet = $context->tweet;
	$vote = $context->vote;
	$partage = $context->partage;
	*/
	
	foreach($context->tweets as $tweet)
	{
	?>
	
<div class="box-tweet">

	<img class="profile-picture-tweet" 
	src=" <?php echo $tweet->getParent()->avatar; ?>"
	alt=" <?php echo $tweet->getParent()->avatar; ?>" 
	>
	
	<div class="infoUser">
		<p class="identifiant-tweet"> <?php echo $tweet->getParent()->identifiant; ?></p>
		<p class="id-tweet"> id : <?php echo $tweet->id ?></p>
	</div>
	
	<p class="message-tweet">

		<?php echo $tweet->getPost()->texte; ?>

	</p>
	


		<form class="form-tweet">
			<button type="button">Share</button>
			<button type="button">Vote</button> <?php echo $tweet->nbvotes; ?>
		</form>

		
	</div>

</div>
	
	<?php
	}
?>






