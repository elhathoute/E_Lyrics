<?php
require_once('adminModal.php');

class AdminController{
      
    public function getAllAdmins(){
       
        $admins = Admin::getAll();

        return $admins;
    }
    public function getOneAdmin($email,$password){
       
        $admins = Admin::getOne($email,$password);

        return $admins;
    }
     public function CountAdmin()
    {
        $countAdmin = Admin::getCountAdmin();
        return $countAdmin;
    }
     
}