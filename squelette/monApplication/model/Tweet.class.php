<?php

abstract class Tweet
{
     public function getPost ()
     {
          $connection = new dbconnection() ;
          
          $sql = "select post from jabaianb.tweet;" ;

          $res = $connection->doQuery( $sql );

          return $res ; //va retourner un num
     }
     
     public function getParent ()
     {
          $connection = new dbconnection() ;
          
          $sql = "select emetteur from jabaianb.tweet;" ;

          $res = $connection->doQuery( $sql );

          return $res ; //va retourner un num aussi
     }
     
     public function getLikes ()
     {
          $connection = new dbconnection() ;
          
          $sql = "select nbvotes from jabaianb.tweet;" ;

          $res = $connection->doQuery( $sql );

          return $res ; //va retourner un num
     }

}
