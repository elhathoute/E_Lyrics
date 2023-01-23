<?php
require_once('songModal.php');

class SongController{
      
    public function getAllSong(){
       
        $songs = Song::getAll();

        return $songs;
    }
   
     
}