<?php

class Tweet extends basemodel
{
     public function getId ()
     {
     	return $data->id;
     }
     
     public function getEmetteur ()
     {
     	return $data->emetteur;
     }

     public function getPost ()
     {
     	return $data->post;
     }
     
     public function getParent ()
     {
	return $data->parent;
     }
     
     public function getLikes ()
     {
	return $data->nbvotes;
     }

}

?>
