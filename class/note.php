<?php
  include 'comment.php';
  class Note {
    private $_note = 0;
    private $_coef = 1;
    private $comment = new Comment();


    /**
     * Get the value of Note
     *
     * @return mixed
     */
    public function getNote()
    {
        return $this->_note;
    }

    /**
     * Set the value of Note
     *
     * @param mixed _note
     *
     * @return self
     */
    public function setNote($_note)
    {
        $this->_note = $_note;

        return $this;
    }

    /**
     * Get the value of Coef
     *
     * @return mixed
     */
    public function getCoef()
    {
        return $this->_coef;
    }

    /**
     * Set the value of Coef
     *
     * @param mixed _coef
     *
     * @return self
     */
    public function setCoef($_coef)
    {
        $this->_coef = $_coef;

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
