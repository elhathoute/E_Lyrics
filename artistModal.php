<?php
require_once('db.php');

class Artist{
    
   
     static public function getAll(){
        $stm = DB::connex()->prepare("select * from artists");
        $stm->execute();

        return $stm->fetchAll();
    
    }
    static public function getCountArtist(){
        $stm = DB::connex()->prepare("select count(id)  from artists");
        $stm->execute();

       $result=$stm->fetchColumn();
        return $result;
    
    }
}

    ?>