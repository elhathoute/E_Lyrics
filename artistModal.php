<?php
require_once('db.php');

class Artist{
    
   
     static public function getAll(){
        $stm = DB::connex()->prepare("select * from artists");
        $stm->execute();

        return $stm->fetchAll();
    
    }
}

    ?>