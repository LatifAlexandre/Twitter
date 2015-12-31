<?php

/*
  id | emetteur | parent | post | nbvotes
  */

class tweetTable
{
	public static function getTweets()
	{
		$connection = new dbconnection() ;
	
		
		$sql = "select * from jabaianb.tweet" ;
                $res = $connection->doQueryObject( $sql, 'tweet' );

                    if($res === false)
                      return false ;
                      
                    return $res;
		/*
		$res = $connection->doQuery( $sql );
		

		
		//on créé un tableau de tweets
		$tabTweet = array();
		
		//on enumere les information de la base utilisateur a utilisateur
		foreach($res as $num => $infoTweet)
		{
			//on rajouter ces elements a notre tableau
			$tabTweet [] = new tweet($infoTweet);
		}
		
		
		//on retourne notre tableau
		return $tabTweet ;*/
	}
	
	public static function getTweetsPostedBy($id)
	{
		$connection = new dbconnection() ;
		
		$sql = "select * from jabaianb.tweet where emetteur=$id" ;
		$res = $connection->doQueryObject( $sql, 'tweet' );

                    if($res === false)
                      return false ;
                      
                    return $res;
		/*$res = $connection->doQuery( $sql );

		//on créé un tableau de tweets
		$tabTweet = array();
		
		//on enumere les information de la base utilisateur a utilisateur
		foreach($res as $num => $infoTweet)
		{
			//on rajouter ces elements a notre tableau
			$tabTweet [] = new tweet($infoTweet);
		}
		
		//on retourne notre tableau
		return $tabTweet ;*/
	}

	public static function getTweetbyId($id)
	{
		$connection = new dbconnection() ;
	
		
		$sql = "select * from jabaianb.tweet where id=$id" ;
                $res = $connection->doQueryObject( $sql, 'tweet' );

                    if($res === false)
                      return false ;
                      
                    return $res[0];
		/*
		$res = $connection->doQuery( $sql );
		

		
		//on créé un tableau de tweets
		$tabTweet = array();
		
		//on enumere les information de la base utilisateur a utilisateur
		foreach($res as $num => $infoTweet)
		{
			//on rajouter ces elements a notre tableau
			$tabTweet [] = new tweet($infoTweet);
		}
		
		
		//on retourne notre tableau
		return $tabTweet ;*/
	}
}
