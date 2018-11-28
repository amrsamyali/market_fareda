<?php
require_once 'database.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of goods
 *
 * @author manunited
 */
class goods {
     public $goods_name;
     public $quantity;
     public $sale;
     public $Wholesale;
      public $mak;
     
     
     
     public function __construct() {
        $DB = new Database();
        $DB->Connect();
    }
    
    public function add_new_goods()
    {
        $Data['goods_name']     = $this->goods_name;
        $Data['quantity']  = $this->quantity;
        $Data['sale']     = $this->sale;
        $Data['Wholesale']  = $this->Wholesale;
        $Data['maksb']  = $this->mak;
        $DB = new Database();
        $DB->Add('goods',$Data);
        } 
    
        
         public function edit_goods($ID)
     {
             $Data['goods_name']     = $this->goods_name;
             $Data['quantity']  = $this->quantity;
             $Data['sale']     = $this->sale;
             $Data['Wholesale']  = $this->Wholesale;
              $Data['maksb']  = $this->mak;
             $DB = new Database();
             $DB->Update('goods', $Data, $ID);
            
              echo '<script>window.location="admin_home.php"</script>';
               
              
     }
     
       public function add_quntity($ID)
     {
           
             $Data['quantity']  = $this->quantity;
           
             $DB = new Database();
             $DB->Update('goods', $Data, $ID);
            
              echo '<script>window.location="admin_home.php"</script>';
     }
        
}
