<?php

/*
  id |             texte              |            date            |       image     
  */

class postTable
{
	public static function getPostById($id)
	{
		$connection = new dbconnection() ;

		$sql = "select * from jabaianb.post where id=$id" ;
		$res = $connection->doQuery( $sql );

		if($res === false)
			return false ;

		$post = new post($res[0]);
		
		return $post;
	}
}
