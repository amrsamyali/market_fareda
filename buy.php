<?php
session_start();
require_once 'database.php';
$DB = new Database();

require_once 'personClass.php';
$person = new personClass();

if($_SESSION['casher_name']!="" &&  $_SESSION['type_id']==1)
{

    $date = date('Y-m-d');
    $day =$DB->Select('day','','');
    $s1 =$DB->Select('masaref','','');


if(isset($_POST['logout']))
{
    $person->logout();
}
?>






<html>
    <head>
        <meta charset="UTF-8">
        <title>معلومات البيع</title>
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
        <form action="" method="post">
              
                <div style=" position:absolute; margin-top:130px;margin-left:200px"> <input type="submit" name="sale" value="البيع" style=" 
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
        
         <form action="" method="post">
              
                <div style=" position:absolute; margin-top:130px;margin-left:500px"> <input type="submit" name="aman" value="أمان" style=" 
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
        
         <form action="" method="post">
              
                <div style=" position:absolute; margin-top:130px;margin-left:800px"> <input type="submit" name="mortbat" value="المرتبات" style=" 
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
        
         <form action="" method="post">
              
                <div style=" position:absolute; margin-top:130px;margin-left:1100px"> <input type="submit" name="kahrba" value="الكهربا" style=" 
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
        
          if(isset($_POST["aman"]) || isset($_POST["rased_all"]) || isset($_POST["rased_month"]) || isset($_POST["rased_year"]))
        {
       echo '<div style=" position:absolute; background-color:ghostwhite;width:300px; height:400px;  margin-top:200px;margin-left:1200px;border-color: #3b5998;
    border-style:solid; 
    border-radius: 20px; ">
             <div style="position:absolute;margin-top: 20px; margin-left:  260px ;"> 
         <a href="http://localhost/market_fareda/buy.php" class="close" data-dismiss="alert" aria-label="close" style="color:red ; font-weight: bold;font-size:20px;" >x</a>
            </div>
         <form action="" method="post">
              
                <div style=" position:absolute; margin-top:70px;margin-left:50px"> <input type="submit" name="rased_month" value="رصيد الشهر" style=" 
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
       
         <form action="" method="post">
             
                <div style=" position:absolute; margin-top:140px;margin-left:50px"> <input type="submit" name="rased_year" value="رصيد السنه" style=" 
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
        
         <form action="" method="post">
             
                <div style=" position:absolute; margin-top:230px;margin-left:50px"> <input type="submit" name="rased_all" value="الرصيد الكلي" style=" 
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
        
         
                
    </div>';
        }
        
        
          if(isset($_POST["mortbat"]) || isset($_POST["mo_month"]) || isset($_POST["mo_year"]) || isset($_POST["mo_all"]))
        {
       echo '<div style=" position:absolute; background-color:ghostwhite;width:300px; height:400px;  margin-top:200px;margin-left:1200px;border-color: #3b5998;
    border-style:solid; 
    border-radius: 20px; ">
             <div style="position:absolute;margin-top: 20px; margin-left:  260px ;"> 
         <a href="http://localhost/market_fareda/buy.php" class="close" data-dismiss="alert" aria-label="close" style="color:red ; font-weight: bold;font-size:20px;" >x</a>
            </div>
         <form action="" method="post">
              
                <div style=" position:absolute; margin-top:70px;margin-left:50px"> <input type="submit" name="mo_month" value="مرتبات الشهر" style=" 
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
       
         <form action="" method="post">
             
                <div style=" position:absolute; margin-top:140px;margin-left:50px"> <input type="submit" name="mo_year" value="مرتبات السنه" style=" 
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
        
         <form action="" method="post">
             
                <div style=" position:absolute; margin-top:230px;margin-left:50px"> <input type="submit" name="mo_all" value="المرتب الكلي" style=" 
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
        
         
                
    </div>';
        }
        
        
        
          if(isset($_POST["kahrba"]) || isset($_POST["ka_month"]) || isset($_POST["ka_year"]) || isset($_POST["ka_all"]))
        {
       echo '<div style=" position:absolute; background-color:ghostwhite;width:300px; height:400px;  margin-top:200px;margin-left:1200px;border-color: #3b5998;
    border-style:solid; 
    border-radius: 20px; ">
             <div style="position:absolute;margin-top: 20px; margin-left:  260px ;"> 
         <a href="http://localhost/market_fareda/buy.php" class="close" data-dismiss="alert" aria-label="close" style="color:red ; font-weight: bold;font-size:20px;" >x</a>
            </div>
         <form action="" method="post">
              
                <div style=" position:absolute; margin-top:70px;margin-left:50px"> <input type="submit" name="ka_month" value="كهربا الشهر" style=" 
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
       
         <form action="" method="post">
             
                <div style=" position:absolute; margin-top:140px;margin-left:50px"> <input type="submit" name="ka_year" value="كهربا السنه" style=" 
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
        
         <form action="" method="post">
             
                <div style=" position:absolute; margin-top:230px;margin-left:50px"> <input type="submit" name="ka_all" value="الكهربا الكليه" style=" 
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
        
         
                
    </div>';
        }
        
        
        
        
        
         if(isset($_POST["sale"]) || isset($_POST["sale_day"]) || isset($_POST["sale_month"]) || isset($_POST["sale_year"]) || isset($_POST["sale_all"]))
        {
       echo '<div style=" position:absolute; background-color:ghostwhite;width:300px; height:450px;  margin-top:200px;margin-left:1200px;border-color: #3b5998;
    border-style:solid; 
    border-radius: 20px; ">
             <div style="position:absolute;margin-top: 20px; margin-left:  260px ;"> 
         <a href="http://localhost/market_fareda/buy.php" class="close" data-dismiss="alert" aria-label="close" style="color:red ; font-weight: bold;font-size:20px;" >x</a>
            </div>
         <form action="" method="post">
              
                <div style=" position:absolute; margin-top:70px;margin-left:50px"> <input type="submit" name="sale_day" value="مبيع اليوم" style=" 
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
       
         <form action="" method="post">
             
                <div style=" position:absolute; margin-top:140px;margin-left:50px"> <input type="submit" name="sale_month" value="مبيع الشهر" style=" 
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
        
         <form action="" method="post">
             
                <div style=" position:absolute; margin-top:230px;margin-left:50px"> <input type="submit" name="sale_year" value="مبيع السنه" style=" 
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
        
         <form action="" method="post">
             
                <div style=" position:absolute; margin-top:320px;margin-left:50px"> <input type="submit" name="sale_all" value="المبيع الكلي" style=" 
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
                
    </div>';
        }
        
             if(isset($_POST["sale_day"]))
        {
                 
               echo ' 
                   
     <div style="position:absolute;margin-top: 250px; margin-left: 50px">                 
  <table style="width:150%; border-collapse: collapse;">
  <tr >
    <th><center>كاشير</center> </th>
    <th style="width:150px";><center>التاريخ</center> </th>
    <th><center>الوقت</center></th>
    <th ><center>المنتجات المباعه</center></th>
    <th><center>المجموع</center></th>
    
  </tr>';
                       $total_day=0;
                       $maksb_alyom=0; 
                  for($i=0;$i<count($day);$i++)
                  {
                     $d= $day[$i]['data'];
                     $my_array = array($d[0],$d[1],$d[2],$d[3],$d[4],$d[5],$d[6],$d[7],$d[8],$d[9]);
                     list($a, $b, $c ,$d ,$f,$gg ,$h,$j,$kk,$l) = $my_array;
                          
                     
                          
                      if($a==$date[0] && $b==$date[1] && $c==$date[2] && $d==$date[3] && $gg==$date[5] && $h==$date[6] && $kk==$date[8] && $l==$date[9] && $day[$i]['total']!=0)
                      {
                          
                      
                   
                      echo "
                          <tr >
                          <td>{$day[$i]['casherr']}</td>
                           <td>{$day[$i]['data']}</td>
                              <td>{$day[$i]['time']}</td>
                                  <td>{$day[$i]['sale_pro']}</td>
                              <td>{$day[$i]['total']}</td>
                                 
                                  
                           </tr>";
                            
                  $total_day=$total_day+$day[$i]['total'];
                         $maksb_alyom=$maksb_alyom+$day[$i]['maksb'];       
                              }
                  }
                  
                   echo '
                  <tr >
                  <td style=" font-size : 40px;color:red;width: 175px;"> حساب اليوم</td>
                   <td> </td>
                          <td> </td>
                          <td> </td>
                          
                           <td style=" font-size : 40px;color:red;">'.$total_day.'</td>       
                           </tr>";
                           
  <tr >
                  <td style=" font-size : 40px;color:red;width: 175px;"> مكسب اليوم</td>
                   <td> </td>
                          <td> </td>
                          <td> </td>
                          
                           <td style=" font-size : 40px;color:red;">'.$maksb_alyom.'</td>       
                           </tr>";
                            
                           </table>';
                  
                   echo '</div>';
              
              
        }
        
         if(isset($_POST["sale_month"]))
        {
                 
               echo ' 
                  
     <div style="position:absolute;margin-top: 250px; margin-left: 50px">                 
  <table style="width:150%; border-collapse: collapse;">
  <tr >
    <th><center>كاشير</center> </th>
    <th style="width:150px";><center>التاريخ</center> </th>
    <th><center>الوقت</center></th>
    <th><center>المنتجات المباعه</center></th>
    <th><center>المجموع</center></th>
    
  </tr>';
                       $total_day=0;
                       $maksb_alyom=0;  
                  for($i=0;$i<count($day);$i++)
                  {
                     $d= $day[$i]['data'];
                     $my_array = array($d[0],$d[1],$d[2],$d[3],$d[4],$d[5],$d[6],$d[7],$d[8],$d[9]);
                     list($a, $b, $c ,$d ,$f,$gg ,$h,$j,$kk,$l) = $my_array;
                          
                     
                          
                      if($a==$date[0] && $b==$date[1] && $c==$date[2] && $d==$date[3] && $gg==$date[5] && $h==$date[6] && $day[$i]['total']!=0)
                      {
                          
                      
                   
                      echo "
                          <tr >
                          <td>{$day[$i]['casherr']}</td>
                           <td>{$day[$i]['data']}</td>
                              <td>{$day[$i]['time']}</td>
                                  <td>{$day[$i]['sale_pro']}</td>
                              <td>{$day[$i]['total']}</td>
                                 
                                  
                           </tr>";
                            
                  $total_day=$total_day+$day[$i]['total'];
                    $maksb_alyom=$maksb_alyom+$day[$i]['maksb'];            
                              }
                  }
                  
                   echo '
                  <tr >
                  <td style=" font-size : 40px;color:red;width: 175px;">حساب الشهر</td>
                   <td> </td>
                          <td> </td>
                          <td> </td>
                          
                           <td style=" font-size : 40px;color:red">'.$total_day.'</td>       
                           </tr>";
                           
 <tr >
                  <td style=" font-size : 40px;color:red;width: 175px;">مكسب الشهر</td>
                   <td> </td>
                          <td> </td>
                          <td> </td>
                          
                           <td style=" font-size : 40px;color:red">'.$maksb_alyom .'</td>       
                           </tr>";
                            
                           </table>';
                  
                   
                   
                   echo '</div>';
              
              
        }
        
         if(isset($_POST["sale_year"]))
        {
                 
               echo ' 
                  
     <div style="position:absolute;margin-top: 250px; margin-left: 50px">                 
  <table style="width:150%; border-collapse: collapse;">
  <tr >
    <th><center>كاشير</center> </th>
    <th style="width:150px";><center>التاريخ</center> </th>
    <th><center>الوقت</center></th>
    <th><center>المنتجات المباعه</center></th>
    <th><center>المجموع</center></th>
    
  </tr>';
                       $total_day=0;
                       $maksb_alyom=0;  
                  for($i=0;$i<count($day);$i++)
                  {
                     $d= $day[$i]['data'];
                     $my_array = array($d[0],$d[1],$d[2],$d[3],$d[4],$d[5],$d[6],$d[7],$d[8],$d[9]);
                     list($a, $b, $c ,$d ,$f,$gg ,$h,$j,$kk,$l) = $my_array;
                          
                     
                          
                      if($a==$date[0] && $b==$date[1] && $c==$date[2] && $d==$date[3] && $day[$i]['total']!=0)
                      {
                          
                      
                   
                      echo "
                          <tr >
                          <td>{$day[$i]['casherr']}</td>
                           <td>{$day[$i]['data']}</td>
                              <td>{$day[$i]['time']}</td>
                                  <td>{$day[$i]['sale_pro']}</td>
                              <td>{$day[$i]['total']}</td>
                                 
                                  
                           </tr>";
                            
                  $total_day=$total_day+$day[$i]['total'];
                  $maksb_alyom=$maksb_alyom+$day[$i]['maksb'];              
                              }
                  }
                  
                   echo '
                  <tr >
                  <td style=" font-size : 40px;color:red;width: 175px;">حساب السنه</td>
                   <td> </td>
                          <td> </td>
                          <td> </td>
                          
                           <td style=" font-size : 40px;color:red;">'.$total_day.'</td>       
                           </tr>";
                           
<tr >
                  <td style=" font-size : 40px;color:red;width: 175px;">مكسب السنه</td>
                   <td> </td>
                          <td> </td>
                          <td> </td>
                          
                           <td style=" font-size : 40px;color:red;">'. $maksb_alyom.'</td>       
                           </tr>";
                            
                           </table>';
                 
                   echo '</div>';
              
              
        }

         if(isset($_POST["sale_all"]))
        {
                 
               echo ' 
                   
     <div style="position:absolute;margin-top: 250px; margin-left: 50px">                 
  <table style="width:150%; border-collapse: collapse;">
  <tr >
    <th><center>كاشير</center> </th>
    <th style="width:150px";><center>التاريخ</center> </th>
    <th><center>الوقت</center></th>
    <th><center>المنتجات المباعه</center></th>
    <th><center>المجموع</center></th>
    
  </tr>';
                       $total_day=0;
                        $maksb_alyom=0;  
                  for($i=0;$i<count($day);$i++)
                  {
                     $d= $day[$i]['data'];
                     $my_array = array($d[0],$d[1],$d[2],$d[3],$d[4],$d[5],$d[6],$d[7],$d[8],$d[9]);
                     list($a, $b, $c ,$d ,$f,$gg ,$h,$j,$kk,$l) = $my_array;
                          
                     
                          
                      if($day[$i]['total']!=0)
                      {
                          
                      
                   
                      echo "
                          <tr >
                          <td>{$day[$i]['casherr']}</td>
                           <td>{$day[$i]['data']}</td>
                              <td>{$day[$i]['time']}</td>
                                  <td>{$day[$i]['sale_pro']}</td>
                              <td>{$day[$i]['total']}</td>
                                 
                                  
                           </tr>";
                            
                  $total_day=$total_day+$day[$i]['total'];
                       $maksb_alyom=$maksb_alyom+$day[$i]['maksb'];          
                              }
                  }
                  
                   echo '
                  <tr >
                  <td style=" font-size : 40px;color:red;width: 175px;">الحساب الكلي</td>
                   <td> </td>
                          <td> </td>
                          <td> </td>
                          
                           <td style=" font-size : 40px;color:red;">'.$total_day.'</td>       
                           </tr>";
                            <tr >
                  <td style=" font-size : 40px;color:red;width: 175px;">مكسب الكلي</td>
                   <td> </td>
                          <td> </td>
                          <td> </td>
                          
                           <td style=" font-size : 40px;color:red;">'. $maksb_alyom.'</td>       
                           </tr>";
                             
                           </table>';
                  
                   echo '</div>';
              
              
        }
        
        
         if(isset($_POST["rased_month"]))
        {
                 
               echo ' 
                  
     <div style="position:absolute;margin-top: 250px; margin-left: 400px">                 
  <table style="width:150%; border-collapse: collapse;">
  <tr >
    
    <th style="width:150px";><center>التاريخ</center> </th>
    <th><center>المصاريف</center></th>
    
  </tr>';
                       $rased_day=0;
                        
                  for($i=0;$i<count($s1);$i++)
                  {
                     $d= $day[$i]['data'];
                     $my_array = array($d[0],$d[1],$d[2],$d[3],$d[4],$d[5],$d[6],$d[7],$d[8],$d[9]);
                     list($a, $b, $c ,$d ,$f,$gg ,$h,$j,$kk,$l) = $my_array;
                          
                     
                          
                      if($a==$date[0] && $b==$date[1] && $c==$date[2] && $d==$date[3] && $gg==$date[5] && $h==$date[6] && $s1[$i]['sarf']=="أمان")
                      {
                          
                      
                   
                      echo "
                          <tr >
                                  <td>{$s1[$i]['date']}</td>
                              <td>{$s1[$i]['money']}</td>
                                 
                                  
                           </tr>";
                            
                  $rased_day=$rased_day+$s1[$i]['money'];
                           
                              }
                  }
                  
                   echo '
                  <tr >
                  <td style=" font-size : 40px;color:red;width: 175px;">  رصيد الشهر</td>
                  
                          
                           <td style=" font-size : 40px;color:red">'.$rased_day.'</td>       
                           </tr>";
                           
 
                           </table>';
                  
                   
                   
                   echo '</div>';
              
              
        }
        
        
         if(isset($_POST["rased_year"]))
        {
                 
               echo ' 
                  
     <div style="position:absolute;margin-top: 250px; margin-left: 400px">                 
  <table style="width:150%; border-collapse: collapse;">
  <tr >
    
    <th style="width:150px";><center>التاريخ</center> </th>
    <th><center>المصاريف</center></th>
    
  </tr>';
                       $rased_day=0;
                        
                  for($i=0;$i<count($s1);$i++)
                  {
                     $d= $day[$i]['data'];
                     $my_array = array($d[0],$d[1],$d[2],$d[3],$d[4],$d[5],$d[6],$d[7],$d[8],$d[9]);
                     list($a, $b, $c ,$d ,$f,$gg ,$h,$j,$kk,$l) = $my_array;
                          
                     
                          
                      if($a==$date[0] && $b==$date[1] && $c==$date[2] && $d==$date[3] && $s1[$i]['sarf']=="أمان")
                      {
                          
                      
                   
                      echo "
                          <tr >
                                  <td>{$s1[$i]['date']}</td>
                              <td>{$s1[$i]['money']}</td>
                                 
                                  
                           </tr>";
                            
                  $rased_day=$rased_day+$s1[$i]['money'];
                           
                              }
                  }
                  
                   echo '
                  <tr >
                  <td style=" font-size : 40px;color:red;width: 175px;"> رصيد السنه</td>
                  
                          
                           <td style=" font-size : 40px;color:red">'.$rased_day.'</td>       
                           </tr>";
                           
 
                           </table>';
                  
                   
                   
                   echo '</div>';
              
              
        }
        
        
         if(isset($_POST["rased_all"]))
        {
                 
               echo ' 
                  
     <div style="position:absolute;margin-top: 250px; margin-left: 400px">                 
  <table style="width:150%; border-collapse: collapse;">
  <tr >
    
    <th style="width:150px";><center>التاريخ</center> </th>
    <th><center>المصاريف</center></th>
    
  </tr>';
                       $rased_day=0;
                        
                  for($i=0;$i<count($s1);$i++)
                  {
                     $d= $day[$i]['data'];
                     $my_array = array($d[0],$d[1],$d[2],$d[3],$d[4],$d[5],$d[6],$d[7],$d[8],$d[9]);
                     list($a, $b, $c ,$d ,$f,$gg ,$h,$j,$kk,$l) = $my_array;
                          
                     
                          
                      if($s1[$i]['sarf']=="أمان")
                      {
                          
                      
                   
                      echo "
                          <tr >
                                  <td>{$s1[$i]['date']}</td>
                              <td>{$s1[$i]['money']}</td>
                                 
                                  
                           </tr>";
                            
                  $rased_day=$rased_day+$s1[$i]['money'];
                           
                              }
                  }
                  
                   echo '
                  <tr >
                  <td style=" font-size : 40px;color:red;width: 175px;">  الرصيد الكلي</td>
                  
                          
                           <td style=" font-size : 40px;color:red">'.$rased_day.'</td>       
                           </tr>";
                           
 
                           </table>';
                  
                   
                   
                   echo '</div>';
              
              
        }
        
        
        
        
        
        
        
        
        if(isset($_POST["mo_month"]))
        {
                 
               echo ' 
                  
     <div style="position:absolute;margin-top: 250px; margin-left: 400px">                 
  <table style="width:150%; border-collapse: collapse;">
  <tr >
    
    <th style="width:150px";><center>التاريخ</center> </th>
    <th><center>المصاريف</center></th>
    
  </tr>';
                       $rased_day=0;
                        
                  for($i=0;$i<count($s1);$i++)
                  {
                     $d= $day[$i]['data'];
                     $my_array = array($d[0],$d[1],$d[2],$d[3],$d[4],$d[5],$d[6],$d[7],$d[8],$d[9]);
                     list($a, $b, $c ,$d ,$f,$gg ,$h,$j,$kk,$l) = $my_array;
                          
                     
                          
                      if($a==$date[0] && $b==$date[1] && $c==$date[2] && $d==$date[3] && $gg==$date[5] && $h==$date[6] && $s1[$i]['sarf']=="مرتبات")
                      {
                          
                      
                   
                      echo "
                          <tr >
                                  <td>{$s1[$i]['date']}</td>
                              <td>{$s1[$i]['money']}</td>
                                 
                                  
                           </tr>";
                            
                  $rased_day=$rased_day+$s1[$i]['money'];
                           
                              }
                  }
                  
                   echo '
                  <tr >
                  <td style=" font-size : 40px;color:red;width: 175px;">  مرتب الشهر</td>
                  
                          
                           <td style=" font-size : 40px;color:red">'.$rased_day.'</td>       
                           </tr>";
                           
 
                           </table>';
                  
                   
                   
                   echo '</div>';
              
              
        }
        
        
         if(isset($_POST["mo_year"]))
        {
                 
               echo ' 
                  
     <div style="position:absolute;margin-top: 250px; margin-left: 400px">                 
  <table style="width:150%; border-collapse: collapse;">
  <tr >
    
    <th style="width:150px";><center>التاريخ</center> </th>
    <th><center>المصاريف</center></th>
    
  </tr>';
                       $rased_day=0;
                        
                  for($i=0;$i<count($s1);$i++)
                  {
                     $d= $day[$i]['data'];
                     $my_array = array($d[0],$d[1],$d[2],$d[3],$d[4],$d[5],$d[6],$d[7],$d[8],$d[9]);
                     list($a, $b, $c ,$d ,$f,$gg ,$h,$j,$kk,$l) = $my_array;
                          
                     
                          
                      if($a==$date[0] && $b==$date[1] && $c==$date[2] && $d==$date[3] && $s1[$i]['sarf']=="مرتبات")
                      {
                          
                      
                   
                      echo "
                          <tr >
                                  <td>{$s1[$i]['date']}</td>
                              <td>{$s1[$i]['money']}</td>
                                 
                                  
                           </tr>";
                            
                  $rased_day=$rased_day+$s1[$i]['money'];
                           
                              }
                  }
                  
                   echo '
                  <tr >
                  <td style=" font-size : 40px;color:red;width: 175px;"> مرتب السنه</td>
                  
                          
                           <td style=" font-size : 40px;color:red">'.$rased_day.'</td>       
                           </tr>";
                           
 
                           </table>';
                  
                   
                   
                   echo '</div>';
              
              
        }
        
        
         if(isset($_POST["mo_all"]))
        {
                 
               echo ' 
                  
     <div style="position:absolute;margin-top: 250px; margin-left: 400px">                 
  <table style="width:150%; border-collapse: collapse;">
  <tr >
    
    <th style="width:150px";><center>التاريخ</center> </th>
    <th><center>المصاريف</center></th>
    
  </tr>';
                       $rased_day=0;
                        
                  for($i=0;$i<count($s1);$i++)
                  {
                     $d= $day[$i]['data'];
                     $my_array = array($d[0],$d[1],$d[2],$d[3],$d[4],$d[5],$d[6],$d[7],$d[8],$d[9]);
                     list($a, $b, $c ,$d ,$f,$gg ,$h,$j,$kk,$l) = $my_array;
                          
                     
                          
                      if($s1[$i]['sarf']=="مرتبات")
                      {
                          
                      
                   
                      echo "
                          <tr >
                                  <td>{$s1[$i]['date']}</td>
                              <td>{$s1[$i]['money']}</td>
                                 
                                  
                           </tr>";
                            
                  $rased_day=$rased_day+$s1[$i]['money'];
                           
                              }
                  }
                  
                   echo '
                  <tr >
                  <td style=" font-size : 40px;color:red;width: 175px;">  المرتب الكلي</td>
                  
                          
                           <td style=" font-size : 40px;color:red">'.$rased_day.'</td>       
                           </tr>";
                           
 
                           </table>';
                  
                   
                   
                   echo '</div>';
              
              
        }
        
        
        
        
        
        
         if(isset($_POST["ka_month"]))
        {
                 
               echo ' 
                  
     <div style="position:absolute;margin-top: 250px; margin-left: 400px">                 
  <table style="width:150%; border-collapse: collapse;">
  <tr >
    
    <th style="width:150px";><center>التاريخ</center> </th>
    <th><center>المصاريف</center></th>
    
  </tr>';
                       $rased_day=0;
                        
                  for($i=0;$i<count($s1);$i++)
                  {
                     $d= $day[$i]['data'];
                     $my_array = array($d[0],$d[1],$d[2],$d[3],$d[4],$d[5],$d[6],$d[7],$d[8],$d[9]);
                     list($a, $b, $c ,$d ,$f,$gg ,$h,$j,$kk,$l) = $my_array;
                          
                     
                          
                      if($a==$date[0] && $b==$date[1] && $c==$date[2] && $d==$date[3] && $gg==$date[5] && $h==$date[6] && $s1[$i]['sarf']=="كهربا")
                      {
                          
                      
                   
                      echo "
                          <tr >
                                  <td>{$s1[$i]['date']}</td>
                              <td>{$s1[$i]['money']}</td>
                                 
                                  
                           </tr>";
                            
                  $rased_day=$rased_day+$s1[$i]['money'];
                           
                              }
                  }
                  
                   echo '
                  <tr >
                  <td style=" font-size : 40px;color:red;width: 175px;">  كهربا الشهر</td>
                  
                          
                           <td style=" font-size : 40px;color:red">'.$rased_day.'</td>       
                           </tr>";
                           
 
                           </table>';
                  
                   
                   
                   echo '</div>';
              
              
        }
        
        
         if(isset($_POST["ka_year"]))
        {
                 
               echo ' 
                  
     <div style="position:absolute;margin-top: 250px; margin-left: 400px">                 
  <table style="width:150%; border-collapse: collapse;">
  <tr >
    
    <th style="width:150px";><center>التاريخ</center> </th>
    <th><center>المصاريف</center></th>
    
  </tr>';
                       $rased_day=0;
                        
                  for($i=0;$i<count($s1);$i++)
                  {
                     $d= $day[$i]['data'];
                     $my_array = array($d[0],$d[1],$d[2],$d[3],$d[4],$d[5],$d[6],$d[7],$d[8],$d[9]);
                     list($a, $b, $c ,$d ,$f,$gg ,$h,$j,$kk,$l) = $my_array;
                          
                     
                          
                      if($a==$date[0] && $b==$date[1] && $c==$date[2] && $d==$date[3] && $s1[$i]['sarf']=="كهربا")
                      {
                          
                      
                   
                      echo "
                          <tr >
                                  <td>{$s1[$i]['date']}</td>
                              <td>{$s1[$i]['money']}</td>
                                 
                                  
                           </tr>";
                            
                  $rased_day=$rased_day+$s1[$i]['money'];
                           
                              }
                  }
                  
                   echo '
                  <tr >
                  <td style=" font-size : 40px;color:red;width: 175px;"> كهربا السنه</td>
                  
                          
                           <td style=" font-size : 40px;color:red">'.$rased_day.'</td>       
                           </tr>";
                           
 
                           </table>';
                  
                   
                   
                   echo '</div>';
              
              
        }
        
        
         if(isset($_POST["ka_all"]))
        {
                 
               echo ' 
                  
     <div style="position:absolute;margin-top: 250px; margin-left: 400px">                 
  <table style="width:150%; border-collapse: collapse;">
  <tr >
    
    <th style="width:150px";><center>التاريخ</center> </th>
    <th><center>المصاريف</center></th>
    
  </tr>';
                       $rased_day=0;
                        
                  for($i=0;$i<count($s1);$i++)
                  {
                     $d= $day[$i]['data'];
                     $my_array = array($d[0],$d[1],$d[2],$d[3],$d[4],$d[5],$d[6],$d[7],$d[8],$d[9]);
                     list($a, $b, $c ,$d ,$f,$gg ,$h,$j,$kk,$l) = $my_array;
                          
                     
                          
                      if($s1[$i]['sarf']=="كهربا")
                      {
                          
                      
                   
                      echo "
                          <tr >
                                  <td>{$s1[$i]['date']}</td>
                              <td>{$s1[$i]['money']}</td>
                                 
                                  
                           </tr>";
                            
                  $rased_day=$rased_day+$s1[$i]['money'];
                           
                              }
                  }
                  
                   echo '
                  <tr >
                  <td style=" font-size : 40px;color:red;width: 175px;">  الكهرباالكليه</td>
                  
                          
                           <td style=" font-size : 40px;color:red">'.$rased_day.'</td>       
                           </tr>";
                           
 
                           </table>';
                  
                   
                   
                   echo '</div>';
              
              
        }
        
        
        
        
        
                   
                          ?>
            
        
    </body>
</html>
<?php
}else{
  echo '<script>window.location="index.php"</script>';  
}
?>