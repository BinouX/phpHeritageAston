<?php
require 'autoloader.php';


  class Comment{
  
    private $_comment ="";
    private $_access ="";
    /**
     * Get the value of Comment
     *
     * @return mixed
     */

     public function __construct($object){
       $this->setAccess($object);
     }

     /**
      * Set the value of Access
      *
      * @param mixed _access
      *
      * @return self
      */
     public function setAccess($_access)
     {
         $this->_access = $_access;
         return $this;
     }

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

      public function addCommentToBdd($comment, $styleComment, $id){
        $this->setComment($comment);
        $classId = NULL; $noteId = NULL; $studentId= NULL; $listnoteId=NULL;

        if($styleComment == 'classe'){
          $classId = $id;
        }else if($styleComment == 'note'){
          $noteId = $id;
        }else if($styleComment == 'student'){
          $studentId = $id;
        }else {
          $listnoteId = $id;
        }


        $table = "aston_commentaire";
        $fields = "comment, aston_classe_id, aston_note_id, aston_student_id, aston_listnote_id";
        $values = "'".$this->getComment()."','".$classId."','".$noteId."','".$studentId."','".$listnoteId."'";

        $this->_access->insert($table,$fields,$values);
      }

      public function getCommentById(){
        $table = "aston_commentaire";
        $fields = "id,comment, aston_classe_id, aston_note_id, aston_student_id, aston_listnote_id";
        $clause = "id = 4";

        $req = $this->_access->select($fields,$table,$clause);

        foreach ($req as $row) {
          echo $row['comment'];
        }

        // var_dump($req);
        // while($data = mysql_fetch_row($req))
        //     {
        //     echo $data['comment'];
        //   }
      }

  }
   ?>
