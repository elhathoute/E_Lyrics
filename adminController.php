<?php
require_once('adminModal.php');

class AdminController{
      
    public function getAllAdmins(){
       
        $admins = Admin::getAll();

        return $admins;
    }
}