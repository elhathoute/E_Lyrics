<?php
require_once('db.php');

class Type{
    
   
     static public function getAll(){
        $stm = DB::connex()->prepare("select * from types");
        $stm->execute();

        return $stm->fetchAll();
    
    }
    static public function getCountType(){
        $stm = DB::connex()->prepare("select count(id)  from types");
        $stm->execute();

       $result=$stm->fetchColumn();
        return $result;
    
    }
}

    ?>