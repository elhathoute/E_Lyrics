<?php
require_once('db.php');

class Type{
    
   
     static public function getAll(){
        $stm = DB::connex()->prepare("select * from types");
        $stm->execute();

        return $stm->fetchAll();
    
    }
}

    ?>