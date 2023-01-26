<?php
require_once('typeModal.php');

class TypeController{
      
    public function getAllTypes(){
       
        $types = Type::getAll();

        return $types;
    }
    public function CountType()
    {
        $countType = Type::getCountType();
        return $countType;
    }
}
?>