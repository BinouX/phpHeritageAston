<?php
  include 'people.php';

  class Admin extends People{
      addStudent($student){
      	$access = new Access();
		$access->new_cnx();
		$fields = "`id_personne`, `firstname_student`, `lastname_student`, `password_student`,`id_classe`";
        $values = "NULL, '".$student->getFirstname()."', '".$student->getLastname()."', '".$student->getPassword()."', '".$student->getIdClasse()."'";
        $access->insert("aston_student",$fields,$values);
      }
      addTeacher($teacher){
      	$access = new Access();
		$access->new_cnx();
		$fields = "`id_teacher`, `firstname_teacher`, `lastname_teacher`, `password_teacher`";
        $values = "NULL, '".$teacher->getFirstname()."', '".$teacher->getLastname()."', '".$teacher->getPassword()."'";
        $access->insert("aston_teacher",$fields,$values);
      }
  }


 ?>
