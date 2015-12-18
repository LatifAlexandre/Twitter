<?php
/*
 * Controler 
 */
 
 

class mainController
{

	public static function helloWorld($request,$context)
	{
		if ($_SESSION['nom'] != '')
		{
			$context->mavariable="hello world";
			return context::SUCCESS;	
		}
		else
		{
			return context::ERROR;
		}
	}

    	public static function superTest($request, $context)
     	{
          $context->mavariable1="param1";
          $context->mavariable2="param2";
          return context::SUCCESS;
     	}


	public static function index($request,$context)
	{
		
		return context::SUCCESS;
	}

	public static function inscription($request, $context)
	{
	    $_SESSION['open'] = "true";
		return context::SUCCESS;
	}
	
	public static function inscriptionTraitement()
	{
		
		/*
		$values = array(
							'id' => 1000,
							'identifiant' => $_REQUEST['identifiant'], 
							'pass' => $_REQUEST['pass'], 
							'nom' => $_REQUEST['nom'], 
							'prenom' => $_REQUEST['prenom']);
		*/
		
	   	$value = array(
				'id' => '213',
				'identifiant' => 'waldo',
				'pass' => 'azerty',
				'nom' => 'brugvin',
				'prenom' => 'charlie',
				'statut' => 'voici mon satut',
				'avatar' => 'testAvatar',	
				);
			
   	
							
		
		if (isset($_REQUEST['avatar']))
		{
			$values['avatar'] = $_REQUEST['avatar'];
		}
		else
		{
			$values['avatar']  = 'NONE';
		}
		
		/*VU QU'ON NE PEUX PAS PENCORE SAVE DS LA BDD*/
		//on ouvre une session pour le debug
		
		foreach($values as $att => $value)
		{
			context::setSessionAttribute($att, 	$value);
		}
		
		//on créé un objet de type user
		$user = new utilisateur($values);
		
		//on l'ajoute avec save
		
		
		/*NE FONCTIONE PAS POUR LE MOMENT */
		//$user->save();
		
		return context::SUCCESS;
	}
	
	public static function personalProfile($request, $context)
	{
	        //$_SESSION['nom'] = "Alfred";
	        
	        /*
		$context->profilePicture = "http://i2.wp.com/coloradoocean.org/wp-content/uploads/2014/08/MW13Speaker_Fabien_Cousteau1.jpg?resize=250%2C285";
		$context->firstName = "Alfred";
		$context->lastName = "Coco";
		$context->identifiant = "cici";
		$context->statut = " Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit lacinia cursus. Nam venenatis ipsum a tortor tincidunt, eget tempus augue posuere. In hac habitasse platea dictumst. Suspendisse eros metus, sodales eget tortor vel, eleifend rhoncus orci. ";
		*/
		
		
		//nous n'avons aucune variables a transferer car elles sont dans la session
		
		
		return context::SUCCESS;
	}
	
	
	public static function tweet($request,$context)
	{
		//"http://i2.wp.com/coloradoocean.org/wp-content/uploads/2014/08/MW13Speaker_Fabien_Cousteau1.jpg?resize=250%2C285"
		
		if (!isset($_GET['userId']))
		{
			//on affiche tout les tweets de la BDD
			$context->tweets = tweetTable::getTweets();
		}
		else
		{
			//on affiche les tweets de l'id donné
			$context->tweets = tweetTable::getTweetsPostedBy($_GET['userId']);
		}
			
		return context::SUCCESS;

	}
	
	
	
	public static function users ($request,$context)
	{
	     $context->users = utilisateurTable::getUsers();
	     
	     if ( isset($_GET['option'])){
	          if ($_GET['option'] == 'm-bis'){
	               utilisateurTable::updateUser($_GET['userID'], $_POST["M_nom"], $_POST["M_prenom"], $_POST['M_login']);
                    header("Refresh:0; url=monApplication.php?action=users");
	          }
          
	     
	     else if ($_GET['option'] == 's'){
	          utilisateurTable::deleteUserById($_GET['userID']);
	          header("Refresh:0; url=monApplication.php?action=users");
	     }
	     }
	     else{
	          
	     }
	     return context::SUCCESS;
	     
	     
	}



}


/* accéder depuis le controleur : 
     $var = nomDeLaClasse::nomDeMethode
 */
