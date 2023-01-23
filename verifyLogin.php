<?php
require_once('adminController.php');
session_start();
// print_r($_POST);

$email = $_POST['email'];
$password =$_POST['password'];


$admin = new AdminController();
$result = $admin->getOneAdmin($email,$password);

$array_error_login = [];
if(count($result)==0){
    unset($_SESSION['success-login']);
    $_SESSION['error-login'] = 'email Or password are Wrong!';
    header('location:index.php');
}
else{
    unset($_SESSION['error-login']);
    $_SESSION['success-login']=$result;
    header('location:dashboardAdmin/index.php');
}

print_r($array_error_login);




?>