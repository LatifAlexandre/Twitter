<?php

	foreach($context->tweets as $tweet)
	{
	     
	?>
	
<div class="box-tweet">

	<a href='monApplication.php?action=userProfile&userID=<?php echo $tweet->getParent()->id ?> '>
		<img class="profile-picture-tweet" 
		src="<?php
		        
                    $external_link = $tweet->getParent()->avatar;
                    if (@getimagesize($external_link)) {
                    
		               echo $tweet->getParent()->avatar;
		          }
		          
		          else{
		               echo "images/tra.png";
		          }
	          ?>"
		>
		<!-- alt=" <?php echo $tweet->getParent()->avatar; ?>"  
		
		https://pbs.twimg.com/profile_images/1124118747/happy_400x400.JPG
		-->
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






