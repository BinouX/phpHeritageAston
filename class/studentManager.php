<?php

include 'access.php';

/**
 * Created by PhpStorm.
 * User: thomas Aldeguer
 * Date: 06/01/2017
 * Time: 09:23
 */
class studentManager
{

    public function select_one($fields,$clause){
        $access = new Access();
        $access->new_cnx();
        $table="student";
        return $access->select($fields,$table,$clause);
    }

    public function select_all($fields){
        $access = new Access();
        $access->new_cnx();
        $table="student";
        return $access->select_all($fields,$table);
    }

}
