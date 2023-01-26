<?php
require_once('db.php');

class Song{
    
   
     static public function getAll(){
        $stm = DB::connex()->prepare("
        select s.*,ad.full_name as 'admin',al.full_name as 'album',ar.full_name as 'artist',t.full_name as 'type' 
        from  songs as s 
        left join admins as ad on s.id_admin=ad.id
        left join albums as al on s.id_album=al.id
        left join artists as ar on s.id_artist=ar.id
        left join types as t on s.id_type=t.id
       
        
        ");
        $stm->execute();

        return $stm->fetchAll();
    
    }
    static public function getCountSong(){
        $stm = DB::connex()->prepare("select count(id)  from songs");
        $stm->execute();

       $result=$stm->fetchColumn();
        return $result;
    
    }
    
 

}

?>