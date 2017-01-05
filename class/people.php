<?php
  include 'comment.php';
  class People{
    private $_firstname = "";
    private $_lastname ="";
    private $comment = new Comment();
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

}
 ?>
