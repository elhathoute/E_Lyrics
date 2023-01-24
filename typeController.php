<?php
require_once('typeModal.php');

class TypeController{
      
    public function getAllTypes(){
       
        $types = Type::getAll();

        return $types;
    }
}
?>