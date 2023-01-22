<?php
require_once('db.php');

class Admin{
    
   
     static public function getAll(){
        $stm = DB::connex()->prepare("select * from admins");
        $stm->execute();

        return $stm->fetchAll();
    
    }
 

}

?>