<?php

class basemodel
{
	private $data;

	public function __construct($array = NULL)
	{
	    if ($array != NULL)
		{
			foreach ( $array as $key => $value )
			{
				$this->data[$key] = $value;
			}
		}
		

	}

	public function save()
	{
	    $connection = new dbconnection() ;
		
	
		
	    if($this->id)
	    {
	      $sql = "update jabaianb.".get_class($this)." set " ;

	      $set = array() ;
	      foreach($this->data as $att => $value)
		if($att != 'id' && $value)
		  $set[] = "$att = '".$value."'" ;

	      $sql .= implode(",",$set) ;
	      $sql .= " where id=".$this->id ;


	    }
	    else
	    {
	      $sql = "insert into jabaianb.".get_class($this)." " ;
	      $sql .= "(".implode(",",array_keys($this->data)).") " ;
	      $sql .= "values ('".implode("','",array_values($this->data))."')" ;
	    }

	    //echo "<p style='color:red;'> $sql </p>";
	    $connection->doExec($sql) ;
	    $id = $connection->getLastInsertId("jabaianb.".get_class($this)) ;

	    return $id == false ? NULL : $id ; 
	}


	//Cette fonction ajoute simplement un element sur la bdd,
	//ne gere pas la modification
	public function saveBis()
	{
		$sql = "insert into ".get_class($this)." " ;
	    $sql .= "(".implode(",",array_keys($this->data)).") " ;
	    $sql .= "values ('".implode("','",array_values($this->data))."')" ;

	    echo "<p> $sql </p>";
	}

	
	
	//accesseurs et mutateurs magiques
	public function __get($prop)
	{
			return $this->data[$prop];
	}

	public function __set($prop,$value) 
	{
		$this->data[$prop]=$value;      
	}
	
	public function aff()
	{
		echo "<pre> Il y a " . count($this->data) . " éléments dans ce tableau...\n";
		if (count($this->data) > 0)
		{
			print_r($this->data);
		}
		echo "</pre>";
	}
	
	
	
	
}
