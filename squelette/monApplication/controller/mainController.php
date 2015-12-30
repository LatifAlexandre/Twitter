<?php
/*
insert into jabaianb.post (texte) values ('qgsfdgfdg')
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
		$context->tweets = tweetTable::getTweets();
		return context::SUCCESS;
	}

	public static function inscription($request, $context)
	{
		return context::SUCCESS;
	}
	

	public static function inscriptionTraitement()
	{
		
		
		$values = array(
							'identifiant' => $_REQUEST['identifiant'], 
							'pass' => sha1($_REQUEST['pass']), 
							'nom' => $_REQUEST['nom'], 
							'prenom' => $_REQUEST['prenom']);

		if (isset($_REQUEST['avatar']))
		{
			$values['avatar'] = $_REQUEST['avatar'];
		}
		else
		{
			$values['avatar']  = 'NONE';
		}
		
		//on créé un objet de type user
		$user = new utilisateur($values);
		
		$user->save();
		
		return context::SUCCESS;
	}
	
	public static function connexion()
	{
	        return context::SUCCESS;
	}
	
	
	public static function connexionTraitement($request, $context)
	{
	        $identifiant = $_REQUEST['identifiant'];
	        $pass = $_REQUEST['pass'];
	        
	        $user = utilisateurTable::getUserByLoginAndPass($identifiant, $pass);
	        
	        //on ouvre la session
	        context::setSessionAttribute('user', 	$user);
	        
	        return context::SUCCESS;    
	}
	
	public static function deconnexion()
	{
	        session_destroy();
	        $url = 'monApplication.php';
	        header("Refresh:4; url=$url");
	        return context::SUCCESS;
	        
	        //header(Refresh:4; url=);
	        
	}
	
	public static function userProfile($request, $context)
	{

		//nous n'avons aucune variables a transferer car elles sont dans la session
		
		//si il n'y a pas d'ID, on charge le profile en session
	        if (!isset($_GET['userID']))
	        {
	                $context->user = $_SESSION['user'];
	                $context->tweets = tweetTable::getTweetsPostedBy($_SESSION['user']->id);
	        }
	        //si il y a un id en GET
	        else
	        {
		        $context->user = utilisateurTable::getUserById($_GET['userID']);
	                $context->tweets = tweetTable::getTweetsPostedBy($_GET['userID']);
	        }
	        
	        
		
		return context::SUCCESS;
	}

	public static function redactionTweetTraitement($request,$context)
	{

		//on créé un objet tweet depuis $_POST et $_SESSION
		
		$post = new post(
			array(
			'texte' => $request['tweet'],
			'date' => date('Y-m-d H:i:s'),
				)
						);

		//on poste le post et on recupere son id

		$idPost = $post->save();

		
		//on créé le tweet a partir des données de sessions et de l'id du post
		$tweet = new tweet(
			array(
			'emetteur' => $_SESSION['user']->id,
			'parent' => $_SESSION['user']->id,
			'post' => $idPost,
			'nbVotes' => 0,
				)
						);	
		$tweet->save();
		

		

		//on le save sur la bdd
		return context::SUCCESS;
	}
	
	
	
	public static function tweet($request,$context)
	{
		//"http://i2.wp.com/coloradoocean.org/wp-content/uploads/2014/08/MW13Speaker_Fabien_Cousteau1.jpg?resize=250%2C285"
		
		//var_dump($request);
		if (!isset($_GET['userID']))
		{
			//on affiche tout les tweets de la BDD
			$context->tweets = tweetTable::getTweets();
		}
		else
		{
			//on affiche les tweets de l'id donné
			$context->tweets = tweetTable::getTweetsPostedBy($_GET['userID']);
		}
			
		return context::SUCCESS;

	}
	
	
	
	public static function users ($request,$context)
	{
	     $context->users = utilisateurTable::getUsers();
	     
	     if ( isset($_GET['option'])){
	          if ($_GET['option'] == 'm-bis'){
	               utilisateurTable::updateUser($_GET['userID'], $_POST["M_nom"], $_POST["M_prenom"], $_POST['M_login']);
                       header("Location: monApplication.php?action=users");
                       
	          }
          
	     
	     else if ($_GET['option'] == 's'){
	          utilisateurTable::deleteUserById($_GET['userID']);
	          header("Location: monApplication.php?action=users");
	     }
	     }
	     else{
	          
	     }
	     return context::SUCCESS;
	     
	     
	}
	
	
	public static function search ($request,$context)
	{
	     $context->users = utilisateurTable::getUsers();

	     return context::SUCCESS;
        }


        public static function searchQuery ($request,$context)
	{
                if ( preg_match ( "/[A-Z  | a-z]+/", $_POST['searchEntry'] ))
                {
                
                        $search = $_POST['searchEntry'];
                        $context->searchResult = utilisateurTable::searchUsers($search);
                        if (count($context->searchResult) == 0)
                                return context::ERROR;
                        else 
                                return context::SUCCESS;
                }
                    
                return context::ERROR;
        }

    public static function listUsers ($request,$context)
    {
    	$context->users = utilisateurTable::getUsers();

    	return context::SUCCESS;
    }


}


/* accéder depuis le controleur : 
     $var = nomDeLaClasse::nomDeMethode
 */
