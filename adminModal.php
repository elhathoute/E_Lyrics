<?php
require_once('db.php');

class Admin{
    
   
     static public function getAll(){
        $stm = DB::connex()->prepare("select * from admins");
        $stm->execute();

        return $stm->fetchAll();
    
    }
    static public function getCountAdmin(){
        $stm = DB::connex()->prepare("select count(id)  from admins");
        $stm->execute();

       $result=$stm->fetchColumn();
        return $result;
    
    }
 

}

?>