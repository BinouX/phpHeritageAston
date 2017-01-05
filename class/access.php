<?php

/**
 * Created by PhpStorm.
 * User: michel
 * Date: 05/01/2017
 * Time: 14:25
 */
class access
{

private $servername = "";
private $username = "root";
private $password = "root";
private $dbname = "";

    /**
     * @param $query
     */
    public function push($query){

    }

    public function fetch($query){

    }

    /**
     *
     */
    function new_cnx(){

        $dsn = "mysql:host=$this->getServername();dbname=$this->getDbname()";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        return new PDO($dsn, $this->getUsername(), $this->getPassword(), $opt);
    }

    function exec_query($query){

        try{
            $cnx = $this->new_cnx();
            $q=$cnx->prepare($query);
            return $q->execute();
        }catch(PDOException  $e ){
            echo "Error: ".$e;
        }
}

public function insert($table,$fields,$values){
        $query="INSERT INTO ".$table." (".$fields.") VALUES (".$values.");";
        return $this->exec_query($query);
}


public function delete()
{

}
public function update(){

}
public function select($fields,$table){
$query="SELECT ".$fields." FROM `".$table."`;";
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
    }


}