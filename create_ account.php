<?php
session_start();
require_once 'database.php';
$DB = new Database();
require_once 'personClass.php';
$person = new personClass();


if($_SESSION['casher_name']!="" &&  $_SESSION['type_id']==1)
{

if(isset($_POST['submit']))
{
   $person->user_name = $_POST['user_name'];
   $person->mobile_number=$_POST['mobile_number'];
    $person->password=$_POST['new_password'];
   $person->type=$_POST['type_name'];
   
   if ($person->type == "Admin")
   {
       $person->type=1;
   }
   
 else if ($person->type == "Casher")
   {
        $person->type=2;
   }
   
   if($person->user_name!="" && $person->mobile_number!="" && $person->password!="" && $person->type!="")
   {
   $person->register();
   echo '<script> alert("تمت الاضافه بنجاح")  </script>';
    }else echo '<script> alert("من فضلك اكمل باقي البينات")  </script>';
}
if(isset($_POST['logout']))
{
    $person->logout();
}
?>






<html>
    <head>
        <meta charset="UTF-8">
        <title>اضافه كاشير </title>
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
            <div id="div8" style="width: 320px;">
              اضافه كاشير او ادمن
           </div>
            
             
            <form action="" method="post">
                <div id="div10" style=" margin-top: 70px;" >
                <input id="input2"   type="text"  placeholder="Casher name" name="user_name">
                <input id="input2" type="text"  placeholder="Mobile number" name="mobile_number">
                <input  id="input2"  type="text"  placeholder="New password" name="new_password">
              
                
                  <p style="margin-top: 18px; font-weight: bold;">Type</p>
                
     <select name="type_name"   style="width: 80px;  border-color: #dfe3ee ; border-style:solid; border-radius: 5px;  margin-top: 5px; padding: 5px;">
	
                    
	<option value="Admin">Admin</option>
	<option value="Casher">Casher</option>
	
</select>
                
                
            
                
                
           
              
                  <div style="position:absolute ;  margin-left: 0px;margin-top: 20px;" ><input style="border-color: #dfe3ee ; border-style:solid; border-radius: 5px; background-color:#3b6e22; height: 40px;width:150px;padding: 5px;color:white;font-weight: bold;" type="submit" value="Create an account" name="submit"></div>
                
                
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