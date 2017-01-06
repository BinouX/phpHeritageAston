<?php
require 'autoloader.php';

/**
 * Created by PhpStorm.
 * User: thomas Aldeguer
 * Date: 06/01/2017
 * Time: 09:23
 */
class classeManager
{


    /** renvoie le resultat de la requête sur un etudiant
     * @param $fields
     * @param $clause
     * @return bool
     */
    public function select_one($fields,$clause){
        $access = new Access();
        $access->new_cnx();
        $table="classe";
        return $access->select($fields,$table,$clause);
    }

    /** Renvoie toutes les classes
     * @param $fields
     * @return bool
     */
    public function select_all($fields){
        $access = new Access();
        $access->new_cnx();
        $table="classe";
        return $access->select_all($fields,$table);
    }

    /** Insert une classe
     * @param $classe
     * @param string $com
     */
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
        //i love les roux
    }




}
