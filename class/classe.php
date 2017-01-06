<?php

/**mod Thomas Aldeguer**/
require 'autoloader.php';

  class Classe{
    private $_name ="";
    private $_delegate1;
    private $_delegate2;
    private $_teacher;
    private $comment;



    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed _name
     *
     * @return self
     */
    public function setName($_name)
    {
        $this->_name = $_name;
    }

    /**
     * Get the value of Delegate
     *
     * @return mixed
     */
    public function getDelegate1()
    {
        return $this->_delegate1;
    }

    /**
     * Set the value of Delegate
     *
     * @param mixed _delegate1
     *
     * @return self
     */
    public function setDelegate1($first,$last)
    {
        $this->_delegate1=new Student();
        $this->_delegate1->setFirstname($first);
        $this->_delegate1->setLastname($last);
        $this->_delegate1->setType('student');
    }

    /**
     * Get the value of Delegate
     *
     * @return mixed
     */
    public function getDelegate2()
    {
        return $this->_delegate2;
    }

    /**
     * Set the value of Delegate
     *
     * @param mixed _delegate2
     *
     * @return self
     */
    public function setDelegate2($first,$last)
    {
        $this->_delegate2=new Student();
        $this->_delegate2->setFirstname($first);
        $this->_delegate2->setLastname($last);
        $this->_delegate2->setType('student');
    }

    /**
     * Get the value of Teacher
     *
     * @return mixed
     */
    public function getTeacher()
    {
        return $this->_teacher;
    }

    /**
     * Set the value of Teacher
     *
     * @param mixed _teacher
     *
     * @return self
     */
    public function setTeacher($first,$last)
    {
        $this->_teacher=new Teacher();
        $this->_teacher->setFirstname($first);
        $this->_teacher->setLastname($last);
        $this->_teacher->setType('teacher');
    }


    /**
     * Get the value of Comment
     *
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set the value of Comment
     *
     * @param mixed comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment->setComment($comment);
    }


}
 ?>
