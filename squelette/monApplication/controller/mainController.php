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

	public static function login($request, $context)
	{
	     $_SESSION['login'] = "cici";
		return context::SUCCESS;
	}
	
	public static function personalProfile($request, $context)
	{
	        $_SESSION['nom'] = "Alfred";
		$context->profilePicture = "http://i2.wp.com/coloradoocean.org/wp-content/uploads/2014/08/MW13Speaker_Fabien_Cousteau1.jpg?resize=250%2C285";
		$context->firstName = "Alfred";
		$context->lastName = "Coco";
		$context->identifiant = "cici";
		$context->statut = " Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit lacinia cursus. Nam venenatis ipsum a tortor tincidunt, eget tempus augue posuere. In hac habitasse platea dictumst. Suspendisse eros metus, sodales eget tortor vel, eleifend rhoncus orci. ";
		
		
		return context::SUCCESS;
	}
	
	
	public static function tweet($request,$context)
	{
		$context->profilePicture = "http://i2.wp.com/coloradoocean.org/wp-content/uploads/2014/08/MW13Speaker_Fabien_Cousteau1.jpg?resize=250%2C285";
		$context->identifiant = "identifiantLong";
		$context->tweet = " Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit lacinia";
		$context->vote = 27;
		$context->partage = 42;
		
		return context::SUCCESS;

	}
	
	
	
	public static function users ($request,$context)
	{
	     $context->users = utilisateurTable::getUsers();
	     return context::SUCCESS;
	}


}


/* accéder depuis le controleur : 
     $var = nomDeLaClasse::nomDeMethode
 */
