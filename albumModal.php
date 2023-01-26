<?php
require_once('db.php');

class Album{
    
   
     static public function getAll(){
        $stm = DB::connex()->prepare("select * from albums");
        $stm->execute();

        return $stm->fetchAll();
    
    }
    static public function getCountAlbum(){
        $stm = DB::connex()->prepare("select count(id)  from albums");
        $stm->execute();

       $result=$stm->fetchColumn();
        return $result;
    
    }
}

    ?>