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

	<a href='monApplication.php?action=userProfile&userID=<?php echo $tweet->getParent()->id ?> '>
		<img class="profile-picture-tweet" 
		src=" <?php echo $tweet->getParent()->avatar; ?>"
		alt=" <?php echo $tweet->getParent()->avatar; ?>" 
		>
		
		<div class="infoUser">
			<p class="identifiant-tweet"> <?php echo $tweet->getParent()->identifiant; ?></p>
			<p class="id-tweet"> id : <?php echo $tweet->id; ?></p>
		</div>
		
		
	</a>
	
	<?php echo $tweet->getPost()->date; ?>
	
	<p class="message-tweet">

		<?php echo $tweet->getPost()->texte; ?>

	</p>
	


		<div class='tweet-actions'>
			
			<a href="monApplication.php?action=tweetShare&tweetID=<?php echo $tweet->id; ?> ">
				Share
			</a>

			<a href="monApplication.php?action=tweetLike&tweetID=<?php echo $tweet->id; ?> "> 
				Vote 
			</a> 

			<?php echo $tweet->nbvotes; ?>
		</div>

		
	</div>

</div>
	
	<?php
	}
?>






