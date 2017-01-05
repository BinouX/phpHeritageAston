<?php
  include 'note.php';
  include 'comment.php';
  include 'student.php';

  class listNote{
    private $student = new Student();
    private $_listNote = array();

    /**
     * Get the value of Student
     *
     * @return mixed
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Set the value of Student
     *
     * @param mixed student
     *
     * @return self
     */
    public function setStudent($student)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get the value of List Note
     *
     * @return mixed
     */
    public function getListNote()
    {
        return $this->_listNote;
    }

    /**
     * Set the value of List Note
     *
     * @param mixed _listNote
     *
     * @return self
     */
    public function setListNote($note)
    {
        $this->_listNote = array_push($note);

        return $this;
    }

}
 ?>
