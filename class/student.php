<?php

require 'autoloader.php';
  class Student extends People {
    private $_classe = "";

     public function __construct($firstname,$lastname,$password){
     	People::__construct($firstname,$lastname,$password);
     }
      
      public function getClasse(){
		return $this->_classe;
	}

	public function setClasse($_classe){
		$this->_classe = $_classe;
	}
  }
  //toto
  	
 ?>
