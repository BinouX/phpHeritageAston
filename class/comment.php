<?php
  class Comment{
    private $_comment ="";


    /**
     * Get the value of Comment
     *
     * @return mixed
     */
    public function getComment()
    {
        return $this->_comment;
    }

    /**
     * Set the value of Comment 
     *
     * @param mixed _comment
     *
     * @return self
     */
    public function setComment($_comment)
    {
        $this->_comment = $_comment;

        return $this;
    }

}
 ?>
