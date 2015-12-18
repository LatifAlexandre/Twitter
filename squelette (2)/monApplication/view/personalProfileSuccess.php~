<?php
	$profilePicture = $context->profilePicture;
	$firstName = $context->firstName;
	$lastName = $context->lastName;
	$statut = $context->statut;	
	$identifiant = $context -> identifiant;
?>



<div id="left-column">
        <div id="profile-bloc">
	        <img id="profile-picture" src=" <?php echo $profilePicture; ?> " alt="profile Picture">
	        <p id="compte-info"> <?php echo $firstName . " " . $lastName; ?> </p>
	        <p id="statut"> Statut : <?php echo $statut; ?> </p
	        <?php 
	             if ($_SESSION['login'] == $identifiant )
	             {
	                  echo "<form>
				             <label for=tweet>Tweet&nbsp;</label> : <input type=tweet name=tweet id=tweet />
				             <input type=submit value=Tweet This />
	                  </form>";
	             }
	        ?>
        </div>
        <div class="box-tweet">
	        <img class="profile-picture-tweet" src=" http://i2.wp.com/coloradoocean.org/wp-content/uploads/2014/08/MW13Speaker_Fabien_Cousteau1.jpg?resize=250%2C285" alt="profile Picture">
	        <p class="identifiant-tweet"> identifiantLong</p>
	        <p class="message-tweet">
         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit lacinia
	        </p>
	        <form class="form-tweet">
	        <button type="button">Share</button> 42	
	        <button type="button">Vote</button> 27
	        </form>
	        </div>

        <div>
</div>
  <?php
     /* ici on va accèder à la base de donner et afficher les logos des utilisateurs comme liste d'utilisateurs */
     
               $connexion = new PDO('pgsql:host=localhost;dbname=etd', 'uapv1404039', 'Mc2wxJ');
			$resultat = $connexion->query("SELECT * FROM jabaianb.utilisateur ORDER BY id;");
			$resultat->setFetchMode(PDO::FETCH_ASSOC);
			
			echo "~ User List ~ <ul id=user-list>";
			while($ligne = $resultat->fetch())
			{
			     echo "<li>$ligne[identifiant]</li>";
			}
			/*  <ul id="user-list">
	               <li><a>user 1</a></li>
	               <li><a>user 2</a></li>
	               <li><a>user 3</a></li>
	               <li><a>user 4</a></li>
	               <li><a>user 1</a></li>
	               <li><a>user 2</a></li>
	               <li><a>user 3</a></li>
	               <li><a>user 4</a></li>
	               <li><a>user 1</a></li>
	               <li><a>user 2</a></li>
	               <li><a>user 3</a></li>
	               <li><a>user 4</a></li>
	               <li><a>user 1</a></li>
	               <li><a>user 2</a></li>
	               <li><a>user 3</a></li>
	               <li><a>user 4</a></li>
	               <li><a>user 1</a></li>
	               <li><a>user 2</a></li>
	               <li><a>user 3</a></li>
	               <li><a>user 4</a></li>
	            */
	            
	            echo "</ul>";
   ?>
   
   
	<!--
   <div class="box-tweet">
	<img class="profile-picture-tweet" src=" http://i2.wp.com/coloradoocean.org/wp-content/uploads/2014/08/MW13Speaker_Fabien_Cousteau1.jpg?resize=250%2C285" alt="profile Picture">
	<p class="identifiant-tweet"> identifiantLong</p>
	<p class="message-tweet">
 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit lacinia
	</p>
	<form class="form-tweet">
	<button type="button">Share</button> 42	
	<button type="button">Vote</button> 27
	</form>
	</div>
   <div class="box-tweet">
	<img class="profile-picture-tweet" src=" http://i2.wp.com/coloradoocean.org/wp-content/uploads/2014/08/MW13Speaker_Fabien_Cousteau1.jpg?resize=250%2C285" alt="profile Picture">
	<p class="identifiant-tweet"> identifiantLong</p>
	<p class="message-tweet">
 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit lacinia
	</p>
	<form class="form-tweet">
	<button type="button">Share</button> 42	
	<button type="button">Vote</button> 27
	</form>
</div> -->
		
	</div>
         
     </ul>
</div>
