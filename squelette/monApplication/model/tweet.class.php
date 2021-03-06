<?php

class tweet extends basemodel
{
	public function getPost()
	{
		$idPost = $this->post;
		$post =postTable::getPostById($idPost);
		
		return $post;
	}
	
	public function getParent()
	{
		$idParent = $this->parent;
		$parent = utilisateurTable::getUserById($idParent);
		
		return $parent;
	}
	
	public function getLikes()
	{
		/*il y a deux maniere de faire : une simple et une compliqué
			la simple : on utilise simplement l'attribut 'nbVotes' et on l'affiche
				l'inconvénient : si l'on incrémente simplement nbVotes a chaque fois que qq clique sur le bouton du tweet, un meme utilisateur pourra liker plusieurs fois le meme tweet
			la compliqué : on compte le nombre de likes dans la table 'jabianb.vote'
				l'avantage : lors du traitement d'un like, on peux aller cherche dans la bdd, sur la table vote, si l'utilisateur a deja liker et ainsi bloquer ses likes supplémentaire. (et eventuelment lui permettre de déliker)
		*/
		
		return $this->nbvotes;	
	}

/*
par convention, nous nommons les attributs de tweet ainsi : 
	id
	transmitter (emetteur dans la bdd)
	parent
	post
	nbVotes
	
	Nous accédons a ces attributs avec la methode hérité de baseMode __get()
	exemple : __get('id') -> retourne l'id


/* Alex, pas besoin d'acceder a la bdd depuis la fonction tweet, c'est la classe tweetTable qui construit un tweet depuis la bdd

     public function getId ()
     {
          $connection = new dbconnection() ;
          $sql = "select id from jabaianb.tweet;";

          $res = $connection->doQuery( $sql );

          if($res === false)
               return false ;

          return $res ;
     }
     
     public function getEmetteur ()
     {
     	$connection = new dbconnection() ;
          $sql = "select emetteur from jabaianb.tweet;";

          $res = $connection->doQueryObject( $sql );

          if($res === false)
               return false ;

          return $res ;
     }

     public function getPost ()
     {
     	$connection = new dbconnection() ;
          $sql = "select post from jabaianb.tweet;";

          $res = $connection->doQuery( $sql );

          if($res === false)
               return false ;

          return $res ;
     }
     
     public function getParent ()
     {
	     $connection = new dbconnection() ;
          $sql = "select parent from jabaianb.tweet;";

          $res = $connection->doQuery( $sql );

          if($res === false)
               return false ;

          return $res ;
     }
     
     public function getLikes ()
     {
	     $connection = new dbconnection() ;
          $sql = "select nbvotes from jabaianb.tweet;";

          $res = $connection->doQuery( $sql );

          if($res === false)
               return false ;

          return $res ;
     }
*/
}
