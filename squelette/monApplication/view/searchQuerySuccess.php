<?php

        echo "<table>";
	echo "<tr> <th>Id</th>  <th>Last Name</th>  <th>First Name</th>  <th>Login</th>  <th>Avatar</th> <th>Password</th></tr>";
	foreach ($context->searchResult as $user )
        {
               $identifiant = $user->identifiant;
               $id = $user->id;
               $nom = $user->nom;
               $prenom = $user->prenom;
               $avatar = $user->avatar;
               
               
               echo "<tr>";
               echo "<td><a href=monApplication/view/view_profile.php?userID=$id</td> $id</a>";
               echo "<td> $nom </td>";
               echo "<td> $prenom </td>";
               echo "<td> $identifiant </td>";
               echo "<td><a href=../user_avatars/$avatar>Image</a> </td>"; //lien vers l'image
               echo "<td> ****** </td>";
               echo "</tr>";
	}
	echo "</table>";
	echo "<p><a href=monApplication.php?action=search>Search again</a>.</p>";
