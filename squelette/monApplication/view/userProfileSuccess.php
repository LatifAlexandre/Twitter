<?php
        $avatar = $context->user->avatar;
        $prenom = $context->user->prenom;
        $nom = $context->user->nom;
        $identifiant = $context->user->identifiant;
        $id = $context->user->id;
        $statut = $context->user->statut;
?>

<div id="profile-bloc" class='bloc-principal'>
         
         <img   id="profile-picture" 
                src="<?php echo $avatar; ?>" 
                alt="<?php echo $avatar; ?>"
         >
         
         <div id="bloc-info-user">
                Nom : <span class='info-user'> <?php echo $prenom; ?> </span> <br>
                Prénom : <span class='info-user'><?php echo $nom; ?> </span> <br>
                Identifiant : <span class='info-user'><?php echo $identifiant; ?> </span> <br>
                id : <span class='info-user'> <?php echo $id; ?> </span>
         </div>
         
         <p id="statut">   
                Lorem ipsum dolor sit amet Lorem ipsum dolor 
                sit amet Lorem ipsum dolor sit amet 
                <?php /*echo $statut;*/ ?> 
        </p>



</div>
<div id='bloc-redaction-tweet' class='bloc-principal'>
         <!-- formulaire de rédaction d'un tweet -->
        <form method="post" action="monApplication.php?action=redactionTweetTraitement">
                <label for="ameliorer">Rédiger un tweet</label><br />
                <textarea name="tweet" id="tweet"></textarea> <br>
                <input type="submit" value="Tweet it" />
        </form>
</div>

<?php

include('tweetSuccess.php');

?>

