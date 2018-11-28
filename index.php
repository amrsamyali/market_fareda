<?php
require_once 'database.php';
$DB = new Database();
require_once 'personClass.php';
$person = new personClass();



if(isset($_POST['login']))
{
   $person->user_name = $_POST['Casher_name'];
   $person->password=$_POST['pass'];
   
   $person->login($person->user_name, $person->password);
}
?>








<html>
<head>
    <meta charset="UTF-8">
<title>
    Market fareda-log in
</title>
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <link rel="stylesheet" href="market_style.css" />
    </head>
    <body>
        <div class="container-fluid">
            <div class="row"  >
                <div class="col-xs-12 " id="div16">
        <div class="row"  >
            
        <div  class="col-xs-12 col-md-6" >
            <div id="div2">
        Fareda Market 
        </div>
        </div>
            <div  class="col-xs-12 col-md-6" >
                <div class="row"  >
        <form action="" method="post">
           
            <div class="col-xs-3">
                <div style="color:white; margin-top:30px">
         Casher name <br>
         <input type="text" name="Casher_name" style="color:black">
        </div>
            </div>
          
            <div class="col-xs-3 ">
        <div style="color:white; margin-top:30px" >
        Password <br>
            <input type="password" name="pass"style="color:black">
        </div>
            </div>
           
            <div class="col-xs-3" >
            <div style="margin-top:43px" >
                <input id="input1" type="submit" name="login" value="Log In">
        </div>
                </div>
            </form>
                    </div>
                </div>
        </div>
        </div>
            </div>
            </div>
        
        <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 " id="div6">
      
            
                
            </div>
        </div>
        </div>
      
        
        
    </body>
</html>
