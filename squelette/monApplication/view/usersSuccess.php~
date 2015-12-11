<?php
     
     
     
     echo "<table>";
		     echo "<tr> <th>Id</th>  <th>Last Name</th>  <th>First Name</th>  <th>Login</th>  <th>Avatar</th> <th>Password</th> <th></th> <th></th> </tr>";
     
     foreach ($context->users as $key )
     {
          echo "<tr>";
          echo "<td><a href='view_profile.php?userID=$key->id'>$key->id</td></a>";
          echo "<td> $key->nom </td>";
          echo "<td> $key->prenom </td>";
          echo "<td> $key->identifiant </td>";
          echo "<td><a href='../user_avatars/$key->avatar'> Image</a> </td>"; //lien vers l'image

          echo "<td> ****** </td>";
          //options
          echo "<td> <a href='users.php?option=m&userID=$key->id'> MODIFIER </a> </td>";
          echo "<td> <a href='users.php?option=s&userID=$key->id'> SUPPRIMER </a> </td>";
          echo "</tr>";
          
	}
     
     
     
     /*var_dump($context->users);
     die();*/








