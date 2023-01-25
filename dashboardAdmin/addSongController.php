<?php
require_once ('../db.php');
session_start();
if(isset($_POST['submit'])){
    print_r($_POST);
    // echo '<br/>';
   $number_of_forms= count($_POST['song-number']);
//    echo $number_of_forms;

   for($i=0;$i<$number_of_forms;$i++){
    // get all inputs
         $id='';
        $song_date = $_POST['date'][$i];
        $song_titre = $_POST['titre'][$i];
        $song_parole_ar = $_POST['parole-ar'][$i];
        $song_parole_fr = $_POST['parole-fr'][$i];
        $song_parole_eng = $_POST['parole-eng'][$i];
        $song_admin = $_POST['admin'][$i];
    //   check if value of album NULL or not
        if($_POST['album'][$i]!='NULL'){
        $song_album = $_POST['album'][$i];

        }else if($_POST['album'][$i]=='NULL'){
            $song_album = NULL;
        }
    

        $song_artist = $_POST['artist'][$i];
        $song_type = $_POST['type'][$i];
      

    //    verifier
    if(
        $song_date!='' &&
        $song_titre!='' &&
        $song_admin!='' &&
        $song_artist!=NULL &&
        $song_type!=NULL
    ){
      
            $stm = DB::connex()->prepare("
            INSERT INTO `songs`(`id`, `date_created`, `titre`, `parole_ar`, `parole_fr`, `parole_eng`, `id_admin`, `id_album`, `id_artist`, `id_type`) 
            VALUES (?,?,?,?,?,?,?,?,?,?)
            ");
            $stm->execute([$id,$song_date,$song_titre,$song_parole_ar,$song_parole_fr,$song_parole_eng,$song_admin,$song_album,$song_artist,$song_type]);
    
           
            $_SESSION['success_add'] = 'Success Add Song ';
            header('location:songs.php');

        
    }else{
        // echo 'error some inputs are empty';
            $_SESSION['error_add'] = 'Error some inputs are empty !';
            // echo $_SESSION['error_add'];
            header('location:songs.php');
     }
   }

}



?>