<?php

 /**
 * 
 */
 class ReadsController extends AppController
 {

 	public $name = 'readModels';
 	public $helpers = array('Html', 'form');

 	public function index ()
 	{
 		$onion = $this->onion->find('all');
 		$this->set('pageName', 'Framework MVC Read ');
 	}

 	public function Onion(){

 		$this->set->db
 	}
 	

 }

?>