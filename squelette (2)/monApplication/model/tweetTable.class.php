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
		return $tabTweet ;
	}
	
	public static function getTweetsPostedBy($id)
	{
		$connection = new dbconnection() ;
		
		$sql = "select * from jabaianb.tweet where emetteur=$id" ;
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
		return $tabTweet ;
	}
}