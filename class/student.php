<?php

  class Student extends People{
    private $_classe = "";
      
      public function getClasse(){
		return $this->_classe;
	}

	public function setClasse($_classe){
		$this->_classe = $_classe;
	}
  }
  	
 ?>
