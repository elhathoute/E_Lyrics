<?php
require_once('albumModal.php');

class AlbumController{
      
    public function getAllAlbums(){
       
        $albums = Album::getAll();

        return $albums;
    }
}
?>