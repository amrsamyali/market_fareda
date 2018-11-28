<?php
session_start();
require_once 'database.php';
$DB = new Database();
require_once 'goods.php';
$goods = new goods();

require_once 'personClass.php';
$person = new personClass();
if($_SESSION['casher_name']!="" &&  $_SESSION['type_id']==1)
{
if(isset($_POST['submit']))
{
   $goods->goods_name = $_POST['goods_name'];
   $goods->quantity=$_POST['quantity'];
   $goods->sale=$_POST['sale'];
   $goods->Wholesale=$_POST['Wholesale'];
   $goods->mak=$_POST['mak'];
if($goods->goods_name!="" && $goods->quantity!="" && $goods->sale!="" && $goods->Wholesale!="" && $goods->mak!="")
   {
      $goods->add_new_goods();   
      echo '<script> alert("تمت الاضافه بنجاح")  </script>';
   } else       echo '<script> alert("من فضلك اكمل باقي البينات")  </script>';
  
}

if(isset($_POST['logout']))
{
    $person->logout();
}
?>



<html>
    <head>
        <meta charset="UTF-8">
        <title>اضافه بضاعه جديده</title>
        <link rel="stylesheet" href="market_style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
    </head>
    <style>
        tr:nth-child(even){background-color: #f2f2f2;}
    </style>
    
    
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
        
        
        
        
          <div id="div6">
        <div id="div7">
            <div id="div8" >
              اضافه بضاعه جديده
           </div>
           
            <form action="" method="post">
                <div id="div10" style=" margin-top: 70px;" >
                <input id="input3" type="text"  placeholder="اسم المنتج" name="goods_name">
                <input id="input3" type="text"  placeholder="الكميه" name="quantity">
               
               <input id="input3" type="text"  placeholder="سعر البيع" name="sale">
               <input id="input3" type="text"  placeholder="سعر الجمله" name="Wholesale">
                <input id="input3" type="text"  placeholder="مكسب القطعه" name="mak">
                
                
    
                
                
                        
                
           
              
                  <div style="position:absolute ;  margin-left: 0px;margin-top: 20px;" ><input style="border-color: #dfe3ee ; border-style:solid; border-radius: 5px; background-color:#3b6e22; height: 40px;width:150px;padding: 5px;color:white;font-weight: bold;" type="submit" value="اضافه البضاعه" name="submit"></div>
                
                
            </div>
           </form>
          
            
            </div>  
        </div>
        
            
    </body>
</html>
<?php
}else{
  echo '<script>window.location="index.php"</script>';  
}
?>