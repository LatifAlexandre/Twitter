<?php

class basemodel
{

	private $data;

	public function __construct($array = "pas de parametre")
	{

		foreach ( $array as $key => &$value )
		{
			$this->__set($key, $value);
		}
		
		print_r($data);
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
	
	public function __get($att)
	{
		return $data->$att;
	}
	
	
	public function __set($att, $value)
	{
		$data->$att = $value;
	}

}



?>
