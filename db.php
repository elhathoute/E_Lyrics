<?php
 class DB{
//static pour na pas crer objet a chaque connect to db  .
    static  public function connex(){
        $db=new PDO("mysql:host=localhost;dbname=e_lyrics","root","");
        return $db;
       
    }
 }

?>