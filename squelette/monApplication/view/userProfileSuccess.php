<?php
        $avatar = $context->user->avatar;
        $prenom = $context->user->prenom;
        $nom = $context->user->nom;
        $identifiant = $context->user->identifiant;
        $id = $context->user->id;
        $statut = $context->user->statut;
?>

<div id="profile-bloc">
         
         <img   id="profile-picture" 
                src="<?php echo $avatar; ?>" 
                alt="<?php echo $avatar; ?>"
         >
         
         <div id="info-user">
                <?php echo $prenom; ?>
                <?php echo $nom; ?>
                <?php echo $identifiant; ?>
                <?php echo $id; ?>
         </div>
         
         <p id="statut"> Statut : <?php echo $statut; ?> </p>
</div>

<?php

include('tweetSuccess.php');

?>

