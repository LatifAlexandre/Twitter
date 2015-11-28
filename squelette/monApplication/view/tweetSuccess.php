<?php
	$profilePicture = $context->profilePicture;
	$identifiant = $context->identifiant;
	$tweet = $context->tweet;
	$vote = $context->vote;
	$partage = $context->partage;
?>


<div class="box-tweet">

	<img class="profile-picture-tweet" src=" <?php echo $profilePicture; ?>" alt="profile Picture">
	<p class="identifiant-tweet"> <?php echo $identifiant?></p>

	<p class="message-tweet">

		<?php echo $tweet; ?>

	</p>
	


		<form class="form-tweet">
			<button type="button">Share</button> <?php echo $partage; ?>
			<button type="button">Vote</button> <?php echo $vote; ?>
		</form>

		
	</div>

</div>