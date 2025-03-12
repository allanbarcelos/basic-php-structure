<?php
require_once __DIR__ . '/../models/User.php';

class Middleware {
    public static function authorize($permissionName){
        $userModel = new User();
        if(!$userModel->hasPersmission($permissionName)){
            echo "You dont have permission";
            exit();
        }
    }
}