<?php

/**
 * Created by PhpStorm.
 * User: Aldeguer Thomas
 * Date: 05/01/2017
 * Time: 14:25
 */
class Access
{

    /**
     * @var string
     */
    private $servername = "localhost";
    /**
     * @var string
     */
    private $username = "root";
    /**
     * @var string
     */
    private $password = "root";
    /**
     * @var string
     */
    private $dbname = "noteaston";

    /**
     * @param $query
     */
    public function push($query){

    }

    /**
     * @param $query
     */
    public function fetch($query){

    }

    /**
     *
     */
    function new_cnx(){

        $dsn = "mysql:host=".$this->getServername().";dbname=".$this->getDbname()."";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        return new PDO($dsn, $this->getUsername(), $this->getPassword(), $opt);
    }

    /**
     * @param $query
     * @return bool
     */
    function fetch_query($query){

        try{
            $cnx = $this->new_cnx();
            $q=$cnx->query($query);
            return $q;
        }catch(PDOException  $e ){
            echo "Error: ".$e;
        }
      }

    function exec_query($query){

        try{
            $cnx = $this->new_cnx();
            printf("</br>".$query."</br>");
            $q=$cnx->prepare($query);
            return $q->execute();
        }catch(PDOException  $e ){
            echo "Error: ".$e;
        }
    }


    /**
     * @param $string
     * @return string
     */
    public function hash($string){
       return md5($string);
    }


    /**
     * @param $table
     * @param $fields
     * @param $values
     * @return bool
     * exemple xx.insert('nom_de_la_table','champ1,champ2,...','".$valeu_champ1.","$valeur_chmap2"')
     */
    public function insert($table, $fields, $values){
        $query="INSERT INTO ".$table." (".$fields.") VALUES (".$values.")";
        return $this->exec_query($query);
    }

    /**
     * @param $table
     * @param $field
     * @param $fieldvalue
     * @return bool
     */
    public function delete($table, $field, $fieldvalue)
    {
        $query = "DELETE FROM `".$table."` WHERE `".$field."` = ".$fieldvalue." ;";
        return $this->exec_query($query);
    }


    /**
     * @param $fields
     * @param $table
     * @param $clause
     * @return bool
     */
    public function select($fields, $table,$clause){
      $query="SELECT ".$fields." FROM ".$table." WHERE ".$clause."";
      return $this->fetch_query($query);
    }

    public function select_all($fields, $table){
      $this->new_cnx();
        $query="SELECT ".$fields." FROM `".$table.";";
        return $this->fetch_query($query);
    }

    public function update(){
        $query="";
        return $this->exec_query($query);
    }



    /**
     * @return string
     */
    public function getServername()
    {
        return $this->servername;
    }

    /**
     * @param string $servername
     */
    public function setServername($servername)
    {
        $this->servername = $servername;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getDbname()
    {
        return $this->dbname;
    }

    /**
     * @param string $dbname
     */
    public function setDbname($dbname)
    {
        $this->dbname = $dbname;
        //toto
    }


}
