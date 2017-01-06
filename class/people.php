<?php
require 'autoloader.php';
  class People{
    private $_firstname = "";
    private $_lastname ="";
    private $_type="";
    private $_password="";
    private $comment;

      public function People($_firstname='', $_lastname='', $_password='')
      {
        $this->_firstname = $_firstname;
        $this->_lastname = $_lastname;
        $this->_password = $_password;
      }
  
      /**
       * @return string
       */
      public function getType()
      {
          return $this->_type;
      }

      /**
       * @return mixed
       */
      public function getComment()
      {
          return $this->comment;
      }

      /**
       * @param mixed $comment
       */
      public function setComment($comment)
      {
          $this->comment=new Comment($comment);
      }

      /**
       * @param string $type
       */
      public function setType($type)
      {
          $this->_type = $type;
      }
    /**
     * Get the value of Firstname
     *
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->_firstname;
    }

    /**
     * Set the value of Firstname
     *
     * @param mixed _firstname
     *
     * @return self
     */
    public function setFirstname($_firstname)
    {
        $this->_firstname = $_firstname;

        return $this;
    }

    /**
     * Get the value of Lastname
     *
     * @return mixed
     */
    public function getLastname()
    {
        return $this->_lastname;
    }

    /**
     * Set the value of Lastname
     *
     * @param mixed _lastname
     *
     * @return self
     */
    public function setLastname($_lastname)
    {
        $this->_lastname = $_lastname;

        return $this;
    }

    public function getPassword()
    {
      return $this->_password;
    }

    public function setPassword($_password)
    {
      $this->_password = $_password;
    }

}
 ?>


