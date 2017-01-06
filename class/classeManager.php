<?php

include 'access.php';
include 'studentManager.php';

/**
 * Created by PhpStorm.
 * User: thomas Aldeguer
 * Date: 06/01/2017
 * Time: 09:23
 */
class classeManager
{



    public function select_one($fields,$clause){
        $access = new Access();
        $access->new_cnx();
        $table="classe";
        return $access->select($fields,$table,$clause);
    }

    public function select_all($fields){
        $access = new Access();
        $access->new_cnx();
        $table="classe";
        return $access->select_all($fields,$table);
    }

    public function insert($classe,$com=" "){
        $m = new studentManager();
        $access = new Access();
        $access->new_cnx();
        $table = 'classe';
        $nom=$classe->getName();
        $deleg1=$m->select_one('id_student',"firstname LIKE %".$classe->getDelegate1->getFirstname."%");
        $deleg2=$m->select_one('id_student',"firstname LIKE %".$classe->getDelegate2->getFirstname."%");
        $fields="name_classe,delegate1_classe,delegate2_classe,com_classe";
        $values="".$nom.",".$deleg1.",".$deleg2.",".$com."";
        $access->insert($table,$fields,$values);
    }




}
