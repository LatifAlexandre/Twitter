<?php

class Tweet extends basemodel
{

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
