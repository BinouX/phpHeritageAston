<?php

require 'autoloader.php';

/**
 * Created by PhpStorm.
 * User: thomas Aldeguer
 * Date: 06/01/2017
 * Time: 09:23
 */
class studentManager
{

    /** Renvoie un etudiant selon parametres
     * @param $fields
     * @param $clause
     * @return bool
     */
    public function select_one($fields, $clause){
        $access = new Access();
        $access->new_cnx();
        $table="student";
        return $access->select($fields,$table,$clause);
    }

    /** Renvoie tout les etudiants
     * @param $fields
     * @return bool
     */
    public function select_all($fields){
        $access = new Access();
        $access->new_cnx();
        $table="student";
        return $access->select_all($fields,$table);
    }

}
