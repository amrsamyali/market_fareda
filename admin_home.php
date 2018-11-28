<?php
session_start();
if($_SESSION['casher_name']!="" &&  $_SESSION['type_id']==1)
{
require_once 'database.php';
$DB = new Database();
$DB->Connect();

require_once 'goods.php';
$goods = new goods();

require_once 'personClass.php';
$person = new personClass();

$date = date('Y-m-d');

if(isset($_POST['submit']))
{
   $goods->goods_name = $_POST['goods_name'];
   $goods->quantity=$_POST['quantity'];
   $goods->sale = $_POST['sale'];
   $goods->Wholesale=$_POST['Wholesale'];
   $goods->mak=$_POST['mak'];
  
  if($goods->goods_name!="" && $goods->quantity!="" && $goods->sale!="" && $goods->Wholesale!="" && $goods->mak!="")
  {
   $goods->edit_goods($_GET['id']);
   
  } else echo '<script> alert("من فضلك اكمل البينات")  </script>'; 
}


if(isset($_POST['add']))
{
   $goods->quantity=$_POST['quantity'] + $_GET['quantity'];
   if($_POST['quantity']!="")
   {
   $goods->add_quntity($_GET['id']);
   } else echo '<script> alert("من فضلك اكمل البينات")  </script>'; 
    

}
if(isset($_POST['logout']))
{
  $person->logout();    
}


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>المنتجات</title>
        <link rel="stylesheet" href="market_style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    </head>
    
    <body style="background-color:#dfe3ee">
       
        
        <div id="div1">
        <div id="div2">
        Fareda Market 
        
        </div>
           
            <div id="div12"style="margin-left:700px;height: 30px; width: 10px; ">
               
         <a id="a" href="http://localhost/market_fareda/admin_home.php"> المنتجات </a>
               
                  
        </div>
    <div id="div14" style="margin-left:820px;" >  <a id="a" href="http://localhost/market_fareda/create_%20account.php"> اضافه كاشير </a></div>
           
    <div id="div14" style=" margin-left:980px;" >  <a id="a" href="http://localhost/market_fareda/addgoods.php"> اضافه بضاعه جديده</a></div>
    <div id="div14" style=" margin-left:1210px;" >  <a id="a" href="http://localhost/market_fareda/buy.php"> معلومات </a></div>
    
    <div id="div14" style="margin-left: 1380px;" ><form action="" method="post"> <input id="input" name="logout" type="submit" value="تسجيل الخروج"></form> </div>
           </div>
      
        
        
        <div style="position:absolute;margin-top: 140px; margin-left: 50px">
            <?php
               $goods =$DB->Select('goods','','');
               echo '         <table style="width:150%; border-collapse: collapse;">
  <tr >
    <th><center>المنتج</center> </th>
    <th><center>الكميه</center></th>
    <th><center>سعر البيع</center></th>
    <th><center>سعر الجمله</center></th>
    <th style="width:50px"><center>مكسب القطعه</center></th>
    
  </tr>';
                       
                  for($i=0;$i<count($goods);$i++)
                  {
                  $id = $goods[$i]['id'];
                  $qun = $goods[$i]['quantity'];
                   
                      echo "
                          <tr >
                           <td>{$goods[$i]['goods_name']}</td>
                              <td>{$goods[$i]['quantity']}</td>
                                  <td>{$goods[$i]['sale']}</td>
                              <td>{$goods[$i]['Wholesale']}</td>
                                  <td>{$goods[$i]['maksb']}</td>
                                  <td>
                                  <a href='http://localhost/market_fareda/admin_home.php?id=$id&action=edit'
                                  style='color: black; text-decoration:none;' 
                                  >تعديل</a></td>
                                  <td>
                                  <a href='http://localhost/market_fareda/admin_home.php?id=$id&action=addqun&quantity=$qun'
                                  style='color: black; text-decoration:none;' 
                                  >اضافه كميه</a></td>
                           </tr>";
                   }
           
                   echo '</table>';
                  
                   echo '</div>'; 
                   if(isset($_GET['id']) & isset($_GET['action']))
                   {
                       if($_GET['action']=="edit")
                       {
                        
                           $where['id'] = $_GET['id'];
                           
                          $edd = $DB->Select('goods',"", $where);
                          
                          echo " <div style=' position:absolute; margin-left: 1130px; margin-top: 250px;'>
            <div id='div8' style='margin-top: 35px; margin-left: 0px; width:350px ' >
            <a href='http://localhost/market_fareda/admin_home.php' class='close' data-dismiss='alert' aria-label='close' style='color:red ; font-weight: bold;font-size:20px;' >x</a>
              تعديل
           </div>
            
            <form action='' method='post'>
            <div id='div10' style='margin-top: 80px;' >
                <input  style='border-color: #dfe3ee ; border-style:solid; border-radius: 5px;  padding: 12px 20px; width: 380px;' type='text' name='goods_name' value='{$edd[0]['goods_name']}'>
                <input  style='border-color: #dfe3ee ; border-style:solid; border-radius: 5px;  margin-top: 10px; padding: 12px 20px; width: 380px;' type='text'  name='quantity' value='{$edd[0]['quantity']}'>
               
                 <input  style='border-color: #dfe3ee ; border-style:solid; border-radius: 5px; margin-top: 10px; padding: 12px 20px; width: 380px;' type='text' name='sale' value='{$edd[0]['sale']}'>
                <input  style='border-color: #dfe3ee ; border-style:solid; border-radius: 5px;  margin-top: 10px; padding: 12px 20px; width: 380px;' type='text'  name='Wholesale' value='{$edd[0]['Wholesale']}'>
               <input  style='border-color: #dfe3ee ; border-style:solid; border-radius: 5px;  margin-top: 10px; padding: 12px 20px; width: 380px;' type='text'  name='mak' value='{$edd[0]['maksb']}'>
               
                
    
                
                
                        
                
           
              
                  <div style='position:absolute ;  margin-left: 0px;margin-top: 20px;' ><input style='border-color: #dfe3ee ; border-style:solid; border-radius: 5px; background-color:#3b6e22; height: 40px;width:150px;padding: 5px;color:white;font-weight: bold;' type='submit' value='Save' name='submit'></div>
                
                
            </div>
           </form>
          
            
            </div>  ";
                           
                       }
                       
                       
                       else if($_GET['action']=="addqun")
                       {
                        
                           $where['id'] = $_GET['id'];
                           
                          $edd = $DB->Select('goods',"", $where);
                          
                          echo " <div style=' position:absolute; margin-left: 1130px; margin-top: 250px;'>
          
            
            <form action='' method='post'>
            <div id='div10' style='width:350px ' >
               <a href='http://localhost/market_fareda/admin_home.php' class='close' data-dismiss='alert' aria-label='close' style='color:red ; font-weight: bold;font-size:20px;' >x</a>
                <input  style='border-color: #dfe3ee ; border-style:solid; border-radius: 5px;  margin-top: 10px; 
                padding: 12px 20px; width: 380px;' type='text'  name='quantity'  placeholder='اضافه كميه'>
               
              
                  <div style='position:absolute ;  margin-left: 0px;margin-top: 20px;' ><input style='border-color: #dfe3ee ; 
                  border-style:solid; border-radius: 5px; background-color:#3b6e22; height: 40px;width:150px;
                  padding: 5px;color:white;font-weight: bold;' type='submit' value='اضافه' name='add'></div>
                
                
            </div>
           </form>
          
            
            </div>  ";
                           
                       }
                           
                   }
                   
                   
            ?>
            
        
             <form action="" method="post">
              
                <div style=" position:absolute; margin-top:200px;margin-left:1200px"> <input type="submit" name="masaref" value="مصاريف" style=" 
    color: white;                                                                                    
    background-color:#337ab7 ; 
   border-color:#337ab7 ;
   border-width:thin;
   font-family:sans-serif;font-size : 30px; 
   width: 200px;
   border-radius: 20px;
   outline: 0;  "> 
                       
      </div>
      </form>
            
            <?php
            if(isset($_POST['masaref']))
            {
                 echo " <div style=' position:absolute; margin-left: 1130px; margin-top: 250px;'>
            <div id='div8' style='margin-top: 35px; margin-left: 0px; width:350px ' >
            <a href='http://localhost/market_fareda/admin_home.php' class='close' data-dismiss='alert' aria-label='close' style='color:red ; font-weight: bold;font-size:20px;' >x</a>
              مصاريف
           </div>
            
            <form action='' method='post'>
            <div id='div10' style='margin-top: 80px;' >
            
 <select name='sarf_name'  style='width: 80px;  border-color: #dfe3ee ; border-style:solid; border-radius: 5px;  margin-top: 5px; padding: 5px;'>
	
                    
	<option value='كهربا'>كهربا</option>
	<option value='مرتبات'>مرتبات</option>
        <option value='أمان'>أمان</option>
	
</select>
                
                
                <input  style='border-color: #dfe3ee ; border-style:solid; border-radius: 5px;  padding: 12px 20px; margin-top: 5px;width: 380px;' type='text' name='k_m' placeholder='الكميه المصروفه'>
               
                
                       
           
              
                  <div style='position:absolute ;  margin-left: 0px;margin-top: 20px;' ><input style='border-color: #dfe3ee ; border-style:solid; border-radius: 5px; background-color:#3b6e22; height: 40px;width:150px;padding: 5px;color:white;font-weight: bold;' type='submit' value='صرف' name='sarff'></div>
                
                
            </div>
           </form>
          
            
            </div>  ";
            }
             if(isset($_POST['sarff'])) 
             {
                 $s=$_POST['sarf_name'];
                 $k_m1=$_POST['k_m'];
      if($k_m1!="")
      {
        $Query2 = "INSERT INTO   `masaref`  (date, sarf, money) VALUES ('$date','$s',$k_m1)";
        $Sql2 = mysql_query($Query2);
      } else   echo '<script> alert("من فضلك اكمل البينات")  </script>';
        
             }
            ?>
            
    </body>
</html>
<?php
}else{
  echo '<script>window.location="index.php"</script>';  
}
?>