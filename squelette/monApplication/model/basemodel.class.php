<?php

class basemodel
{

	public function __construct($array = "pas de parametre")
	{
		print_r($array);
	/*
		if ($array == "pas de parametre")
		{
			//on construit un element vide
		}
		else
		{
			print_r
		}*/
	}

	public function save()
	{
	    $connection = new dbconnection() ;

	    if($this->id)
	    {
	      $sql = "update ".get_class($this)." set " ;

	      $set = array() ;
	      foreach($this->data as $att => $value)
		if($att != 'id' && $value)
		  $set[] = "$att = '".$value."'" ;

	      $sql .= implode(",",$set) ;
	      $sql .= " where id=".$this->id ;
	    }
	    else
	    {
	      $sql = "insert into ".get_class($this)." " ;
	      $sql .= "(".implode(",",array_keys($this->data)).") " ;
	      $sql .= "values ('".implode("','",array_values($this->data))."')" ;
	    }

	    $connection->doExec($sql) ;
	    $id = $connection->getLastInsertId("jabaianb.".get_class($this)) ;

	    return $id == false ? NULL : $id ; 
	}

}
