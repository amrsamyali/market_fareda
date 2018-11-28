<?php
require_once 'database.php';
$DB = new Database();
$DB->Connect();

require_once 'goods.php';
$goods = new goods();

               $goods =$DB->Select('goods','','');
            
                       
                  for($i=0;$i<count($goods);$i++)
                  {
                  $id = $goods[$i]['id'];
                  $qun = $goods[$i]['quantity'];
                   
                                  $a[$i]=$goods[$i]['goods_name'];
                                  
                                  
                          }
           
           



// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= " $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>