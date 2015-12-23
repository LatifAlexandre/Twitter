<!-- CHARLIE BRUGVIN uapv1402561 -->
<!-- en binome avec ALEXANDRE LATIF uapv1404039 -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>inscription</title>
		<link rel="stylesheet" href="../CSS/style.css">
		<meta name="nom" content="Brugvin">
		<meta name="prenom" content="Charlie">
		<meta name="uapv" content="1402561">
		<meta name="description" content="Search engine">
	</head>
	<body>
		<?php include("header.php"); ?>

		<section id="section-centrale">
		     <form id="search_form" method="post" action="searchEngine.php?option=search" enctype="multipart/form-data">
			     <h1>Our Search Engine</h1>
                    <p> Search users using their first name, last name or user name : </p>
				<label for="searchEntry">search&nbsp;</label> : <input type="text" name="searchEntry" id="searchEntry" />
				<input type="submit" value="Search" />
			</form>
			<?php
          if ( isset($_GET['option']) )
          {
               if ($_GET['option'] == "search")
               {
               //verify that entry is just capitale or lower case letter as the first character in the search field
               if ( preg_match ( "/[A-Z  | a-z]+/", $_POST['searchEntry'] ))
               {
               
                    $search = $_POST['searchEntry'];
                    
                    //connect to the data base
                    $connexion = new PDO('pgsql:host=localhost;dbname=etd', 'uapv1404039', 'y1wfc8');
                    echo "\n $search";
                    $result = $connexion->query("SELECT * FROM jabaianb.utilisateur WHERE nom='".$search."' OR prenom='".$search."' OR identifiant='".$search."';");
                   
                    if ( $result == false )
                    {
                         echo "Une erreur s'est produite ";
                         exit;
                    }
                    
                    else
                    {
						$result->setFetchMode(PDO::FETCH_ASSOC);

						echo "<table>";
						echo "<tr><th>Last Name</th>  <th>First Name</th> <th>User Name</th></tr>";
						while($row = $result->fetch())
						{
							echo "<tr>";
							echo "<td>".$row['nom']."</td>";
							echo "<td>".$row['prenom']."</td>";
							echo "<td>".$row['identifiant']."</td>";
							echo "</tr>";
						}
						echo "</table>";
					}
                    
               }
               
               else
               {
                    echo "<p color=red> Please enter a correct search query </p>";
               }
               }
          }
		?>
		</section>
		
		
		
		
		<?php include("footer.php"); ?>
	</body>
</html>
