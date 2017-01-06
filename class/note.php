<?php
  include 'access.php';


  class Note {
    private $_note = 0;
    private $_coef = 1;
    private $_id_etudiant = null;

    private $_comment;

    public function __construct($note,$coef,$id_etudiant,$comment) {
        $this->_note = $note;
        $this->_coef = $coef;
        $this->_id_etudiant = $id_etudiant;
        $this->comment = $comment;

    }
	/**
     * Get the value of Id_etudiant
     *
     * @return mixed
     */
	 public function get_id_etudiant(){
		return $this->_id_etudiant;
	}
    /**
     * Set the value of Id_etudiant
     *
     * @param mixed _id_etudiant
     *
     * @return self
     */
	public function set_id_etudiant($_id_etudiant){
		$this->_id_etudiant = $_id_etudiant;
	}
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
        $this->_comment = $comment;

    }
	
	/**
     * Add a note in the table aston_note
     *
     * @return mixed
     */
	public function addNoteBdd()
	{
		$access = new Access();
		$access->new_cnx();
		$field = "`id_note`, `note_note`, `com_note`, `coef_note`, `id_personne`";
        $values = "NULL,'".$this->_note."','".$this->_comment."','".$this->_note."','".$this->_id_etudiant."'";
        $access->insert("aston_note",$field,$values);
	}
}
    /*$note = new Note(10,1,1,"Correct");
    print_r($note);
    $note->addNoteBdd();*/
 ?>
