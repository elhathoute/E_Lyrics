
<?php
require_once('../db.php');
session_start();

$id = $_GET['id'];

$stm = DB::connex()->prepare("DELETE FROM `songs` WHERE id=?");
$stm->execute([$id]);
$_SESSION['success_remove'] = 'Success Remove Song with id='.$id;
header('location:songs.php');

?>