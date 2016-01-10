<?php

class utilisateurTable
{
  public static function getUserByLoginAndPass($login,$pass)
  {
    $connection = new dbconnection() ;
    
    $sql = "select * from jabaianb.utilisateur where identifiant='".$login."' and pass='".sha1($pass)."'" ;
    $res = $connection->doQuery( $sql );

    if($res === false)
      return false ;
	
    //nous allons construire l'utilisateur a partir des donné recuillis
  	if (isset($res[0]))
  	        $user = new utilisateur($res[0]);
  	else
  	        return false ;
  	
  	return $user;
  }

  public static function getUserById($id)
  {
  	$connection = new dbconnection() ;
  	//je créé la commande sql en string
  	$sql =  "select * from jabaianb.utilisateur where id=$id" ;
  	//doQuery, qui est créé par le prof, retourne un tableau associatif
  	// un tableau de tableau associatif pour etre precis.
  	//ou chaque element du tableau représente une ligne stocké dans un tab associatif
  	$res = $connection->doQuery( $sql );
  	
  	//nous allons construire l'utilisateur a partir des donné recuillis
  	
  	if (isset($res[0]))
  	        $user = new utilisateur($res[0]);
  	else
  	        $user = new utilisateur(NULL);
  	
  	return $user;
  	
  }

  public static function getUsers()
  {
  
  	$connection = new dbconnection() ;
    
    $sql = "select * from jabaianb.utilisateur ORDER BY id" ;
    $res = $connection->doQueryObject( $sql, 'utilisateur' );

    if($res === false)
      return false ;
      
    return $res;
    /*
    //on créé un tableau de personnes
    $tabUser = array();
    
    //on enumere les information de la base utilisateur a utilisateur
    foreach($res as $num => $infoUser)
    {
    	//on rajouter ces elements a notre tableau
    	$tabUser[] = new utilisateur($infoUser);
    }
    
    //on retourne notre tableau
    return $tabUser;
    */
  }
  
  
  public static function searchUsers($search)
  {
  
        $connection = new dbconnection() ;

        $sql = "SELECT * FROM jabaianb.utilisateur WHERE nom='".$search."' OR prenom='".$search."' OR identifiant='".$search."';";
        $res = $connection->doQueryObject( $sql, 'utilisateur' );

        if($res === false)
        return false ;

        return $res;
  }
  
  
  
   public static function deleteUserById($id)
   {
     $connection = new dbconnection();
     $sql = "DELETE FROM jabaianb.utilisateur WHERE id = '$id'";
     
     $res = $connection->doQuery ( $sql );
     
     if($res === false)
      return false ;

     return true ;
   }
  
  
  public static function updateUser($id, $nom, $prenom, $login)
   {
     $connection = new dbconnection();
     $sql = "UPDATE jabaianb.utilisateur SET nom='$nom', prenom='$prenom', identifiant='$login' WHERE id='$id'";
     
     $res = $connection->doQuery ( $sql );
     
     if($res === false)
      return false ;

     return true ;
   }
  
  
  
  
  
}







