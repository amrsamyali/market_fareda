<?php
require_once 'database.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of personClass
 *
 * @author manunited
 */
class personClass {
    //put your code here
    
     public $user_name;
    public $mobile_number;
    public $password;
    public $type;
    
     public function __construct() {
        $DB = new Database();
        $DB->Connect();
    }
    
    public function login($UserName,$Password)
    {
        $DB = new Database();
        $DB->Login($UserName, $Password);
        
    }
    
    public function register()
    {
        $Data['user_name']     = $this->user_name;
        $Data['mobile']  = $this->mobile_number;
        $Data['password']    = $this->password;
        $Data['type_id'] = $this->type;
        $DB = new Database();
        $DB->Add('person',$Data);
        }
    
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header("location:index.php");
    }
    
    
    
}
