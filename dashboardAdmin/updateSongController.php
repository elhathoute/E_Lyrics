<?php
require_once ('../db.php');
session_start();
if(isset($_POST['update'])){
    print_r($_POST);


    // get all inputs to update
        $id=$_POST['song-id-update'];
        $song_date = $_POST['date-update'];
        $song_titre = $_POST['titre-update'];
        $song_parole_ar = $_POST['parole-ar-update'];
        $song_parole_fr = $_POST['parole-fr-uepdate'];
        $song_parole_eng = $_POST['parole-eng-update'];
        $song_admin = $_POST['admin-update'];
    //   check if value of album NULL or not
        if($_POST['album-update']!='NULL'){
        $song_album = $_POST['album-update'];

        }else if($_POST['album-update']=='NULL'){
            $song_album = NULL;
        }
    

        $song_artist = $_POST['artist-update'];
        $song_type = $_POST['type-update'];
      

    //    verifier
    if(
        $song_date!='' &&
        $song_titre!='' &&
        $song_admin!='' &&
        $song_artist!='NULL' &&
        $song_type!='NULL'
    ){
      
            $stm = DB::connex()->prepare("
            UPDATE songs SET date_created=?,titre=?,parole_ar=?,
            parole_fr=?,`parole_eng`=?,`id_admin`=?,
            id_album=?,id_artist=?,id_type=? WHERE id=?
           
            ");
            $stm->execute([$song_date,$song_titre,$song_parole_ar,$song_parole_fr,$song_parole_eng,$song_admin,$song_album,$song_artist,$song_type,$id]);
    
            $_SESSION['session-etat-update']=1;
            $_SESSION['success-error-message-update'] = 'Success Update Song ';
           
            header('location:songs.php');
    }
    else{
        $_SESSION['session-etat-update']=0;
        $_SESSION['success-error-message-update'] = 'Error in Update  !';
            header('location:songs.php');
     }
   }





?>