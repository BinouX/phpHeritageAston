<?php
  include '../class/access.php';
  $_access = new Access();

  if(isset($_POST['create'])){
    if($_POST['listStatut'] == 'student'){
      $user = 1;
    }
    if($_POST['listStatut'] == 'teacher'){
      $user = 2;
    }
    if($_POST['listStatut'] == 'admin'){
      $user = 3;
    }

    $table = "aston_user";
    $fields = "lastname_user, firstname_user, password, statut_user, id_classe";
    $values = "'".$_POST['lastname']."','".$_POST['firstname']."','".$_POST['lastname']."','".$user."',1";
    $_access->insert($table,$fields,$values);

    header('Location: ../gestionPeople.php');
  }
 ?>
