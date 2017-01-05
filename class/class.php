<?php
  include 'student.php';
  include 'teacher.php';
  include 'comment.php';

  class Classe{
    private $_name ="";
    private $_delegate1 = new Student();
    private $_delegate2 = new Student();
    private $_teacher = new Teacher();
    private $comment = new Comment();


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

        return $this;
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
    public function setDelegate1($_delegate1)
    {
        $this->_delegate1 = $_delegate1;

        return $this;
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
    public function setDelegate2($_delegate2)
    {
        $this->_delegate2 = $_delegate2;

        return $this;
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
    public function setTeacher($_teacher)
    {
        $this->_teacher = $_teacher;

        return $this;
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
        $this->comment = $comment;

        return $this;
    }

}
 ?>
