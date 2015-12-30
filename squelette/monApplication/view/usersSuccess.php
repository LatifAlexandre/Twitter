<?php
     
     
     
     echo "<table>";
		     echo "<tr> <th>Id</th>  <th>Last Name</th>  <th>First Name</th>  <th>Login</th>  <th>Avatar</th> <th>Password</th> <th></th> <th></th> </tr>";
     
     foreach ($context->users as $key )
     {
               $identifiant = $key->identifiant;
               $id = $key->id;
               $nom = $key->nom;
               $prenom = $key->prenom;
               $avatar = $key->avatar;
          if ( isset($_GET['option']) && $_GET['option'] == 'm' && $_GET['userID'] == $key->id )
          {
               
               echo "<form id='form-modif-user' method='POST' action='monApplication.php?action=users&option=m-bis&userID=$id'>";
               echo "<td> $id </td>";
               echo "<td> <input type='text' name='M_nom' id='M_nom' value=$nom></td>";
               echo "<td> <input type='text' name='M_prenom' id='M_prenom' value=$prenom> </td>";
               echo "<td> <input type='text' name='M_login' id='M_login' value=$identifiant > </td>";
               echo "<td><a href=../user_avatars/$avatar> Image</a> </td>"; //lien vers l'image
               echo "<td> ****** </td>";
               echo "<td class='bouton-option'> <input type='submit' value='VALIDER' /> </td>";
               echo "<td> <a href=monApplication/view/usersSuccess.php> ANNULER </a> </td>";
          }
          else
          {

               echo "<tr>";
               echo "<td> <a href=monApplication.php?action=userProfile&userID=$id> $id </a> </td> ";
               echo "<td> $nom </td>";
               echo "<td> $prenom </td>";
               echo "<td> $identifiant </td>";
               echo "<td><a href=../user_avatars/$avatar> Image</a> </td>"; //lien vers l'image

               echo "<td> ****** </td>";
               //options
               echo "<td> <a href=monApplication.php?action=users&option=m&userID=$id> MODIFIER </a> </td>";
               echo "<td> <a href=monApplication.php?action=users&option=s&userID=$id> SUPPRIMER </a> </td>";
               echo "</tr>";
          }
          
	}
     
        echo "</table>";
