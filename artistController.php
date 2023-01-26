<?php
require_once('artistModal.php');

class ArtistController{
      
    public function getAllArtists(){
       
        $artists = Artist::getAll();

        return $artists;
    }

    public function CountArtist()
    {
        $countArtist = Artist::getCountArtist();
        return $countArtist;
    }
}
?>