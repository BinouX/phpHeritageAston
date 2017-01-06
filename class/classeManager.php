<?php

include 'access.php';

/**
 * Created by PhpStorm.
 * User: michel
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

    public function insert($classe){
        $access = new Access();
        $access->new_cnx();
        $table = 'classe';
        
    }




}