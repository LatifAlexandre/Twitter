<?php

class Tweet extends basemodel
{
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

}

?>
