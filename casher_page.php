<?php
session_start();
if($_SESSION['casher_name']!="" &&  $_SESSION['type_id']==2)
{
require_once 'database.php';

require_once 'personClass.php';
$person = new personClass();

$DB = new Database();
$DB->Connect();


$date = date('Y-m-d');
$time = date("H:i:s", strtotime("-1 Hours"));
if(isset($_POST['logout']))
     {
         $person->logout();
     }




?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>فريده ماركت</title>
        <link rel="stylesheet" href="market_style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
  
    <body style="background-color:#dfe3ee">
       
        
        
        
        <div id="div1">
        <div id="div2">
        Fareda Market 
        
        </div>
            
            <div id="div2" style="margin-left:700px; ">
                Welcome  <?php echo  $_SESSION['casher_name']; ?> 
        
        </div>
           
          
            <div id="div14" style="margin-left: 1350px;" > 
                <form action="" method="post">
                <input id="input" type="submit" name="logout" value="تسجيل الخروج"> </form> </div>
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
                                 
                                  
                           </tr>";
                   }
           
                   echo '</table>';
                  
                   echo '</div>';
                    
                 
                   

                   
                   
            ?>
          
            
           
            <form method="post">
                  <div style=" position:absolute; margin-top:130px;margin-left:700px;">
<input type="button" style=" 
    color: white;                                                                                    
    background-color:#337ab7 ; 
   border-color:#337ab7 ;
   border-width:thin;
   font-family:sans-serif;font-size : 30px; 
   width: 200px;
   border-radius: 20px;
   outline: 0;  " value="عمليه بيع" onclick="creatediv()">
</div>
</form> 
            
            
            
            
              <form action="" method="post">
             
                <div style=" position:absolute; margin-top:200px;margin-left:700px;"> <input type="submit" name="sale_day" value="مبيع اليوم" style=" 
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
      
            
            <script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").value = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").value = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
            
            
            
            
     <script language="Javascript">
var i=1;
var d=50;
function creatediv()
{
var mNewObj = document.createElement('input');
mNewObj.id = "BOX" + i;
mNewObj.style.backgroundColor="white";
mNewObj.style.bordercolor='#dfe3ee' ;
mNewObj.style.borderstyle='solid';
mNewObj.style.padding='12px 20px';
mNewObj.style.width='120px';
mNewObj.style. marginTop="10px";
mNewObj.style. marginLeft="300px";
mNewObj.style.borderRadius='5px';
mNewObj.placeholder="اسم المنتج";
mNewObj.name=i;
mNewObj.type="text";
mNewObj.innerText = "Box " + i;
mNewObj.setAttribute("list", "browsers");
document.getElementById("tid").appendChild(mNewObj);


var y = document.createElement("DATALIST");
    y.setAttribute("id", "browsers");
    document.getElementById("tid").appendChild(y);
     
     <?php for($i=0;$i<count($goods);$i++)
                  { 
         $aa = $goods[$i]['goods_name'];
                 ?>
      
     
var z = document.createElement("OPTION");
    z.setAttribute("value", "<?php echo  $aa ;?>");
     
    document.getElementById("browsers").appendChild(z);
<?php         
                  } 
     ?>



mNewObj1 = document.createElement('input');
mNewObj1.id = "BOX" + d;
mNewObj1.style.backgroundColor="white";
mNewObj1.style.bordercolor='#dfe3ee' ;
mNewObj1.style.borderstyle='solid';
mNewObj1.style.padding='12px 20px';
mNewObj1.style.width='120px';
mNewObj1.style. marginTop="10px";
mNewObj1.style. marginLeft="10px";
mNewObj1.style.borderRadius='5px';
mNewObj1.placeholder="الكميه";
mNewObj1.name=d;
mNewObj1.type="text";
mNewObj1.innerText = "Box " + d;


 
document.getElementById("tid").appendChild(mNewObj1);

document.getElementById("clicks").value = i;

i++;
d++;
   
        document.getElementById("demo").innerHTML= '<input type="submit" name="bale" value="عمل فاتوره" style="color: white; background-color:#337ab7 ; border-color:#337ab7 ; border-width:thin;font-family:sans-serif;font-size : 30px; width: 200px;  border-radius: 20px; outline: 0; ">';
        document.getElementById("x").innerHTML='  <a href="http://localhost/market_fareda/casher_page.php" class="close" data-dismiss="alert" aria-label="close" style="color:red ; font-weight: bold;font-size:20px;" >x</a>' 


}
</script>

               
                          <?php
                         
                      
                     
                    echo '<form  method="post">  
                   
                    <div id="tid" style= "   height: 500px;  width: 800px;   position:absolute;  margin-left: 700px;  margin-top: 270px;  ">
                        

                    <div style= "position:absolute;  margin-top:0px;  margin-left:0px;" >
                      <input id="clicks" type="hidden" value="" name="click">  
                      </div>
                      

                     
                       <div id="x"  style= "position:absolute;  margin-top:0px;  margin-left:570px;" ></div>
                     
                   

                        <div id="demo"  style= "position:absolute;  margin-top:100px;  margin-left:0px;" ></div>
                    </div>
        
   
                                            
                       </form>';
                    
                    
                    
                   
                   if(isset($_POST["bale"]))
{  $g=50;
   $total=0;
   $alm=0;
   $text="";
  echo '  <div style="position:absolute;margin-top: 120px; margin-left: 1380px ;"> 
         <a href="http://localhost/market_fareda/casher_page.php" class="close" data-dismiss="alert" aria-label="close" style="color:red ; font-weight: bold;font-size:20px;" >x</a>
            </div> 
      <div style="position:absolute;margin-top: 140px; margin-left: 920px ;">   
               <table style="width:150%; border-collapse: collapse;">
  <tr >
    <th><center>المنتج</center> </th>
    <th><center>الكميه</center></th>
    <th><center>سعر الكميه </center></th>   
  </tr>';

   for($k=1;$k<=$_POST['click'];$k++)
   {
 
       if($_POST[$k]!="" &&$_POST[$g]!="")
       {
          $Query ="SELECT * FROM `goods` WHERE 	goods_name ='$_POST[$k]'";
           $Sql = mysqli_query($DB->Connect() , $Query);
      $Num = mysqli_num_rows($Sql);
    
      if($Num == 1) 
      {
          
          $row= mysqli_fetch_assoc($Sql);
          
         $als3r=  $_POST[$g]* $row['sale'];
         $almaksb = $_POST[$g]* $row['maksb'];
         
         $alkmia = $row['quantity']-$_POST[$g];
         
          $Query1="UPDATE `goods` SET quantity = $alkmia where goods_name ='$_POST[$k]'  ";
          $Sql1 = mysqli_query($DB->Connect() , $Query1);
     
         echo '
   <tr >
                           <td>'. $_POST[$k].'</td>
                              <td>'.$_POST[$g].'</td>
                                  <td> '.$als3r.' </td>
                              
                                 
                                  
                           </tr>
                       ';
                                  
         $total=$total+$als3r;
         $alm=$alm+$almaksb;
      
         
      }
       $text=$text." ".$_POST[$k]."".$_POST[$g];
       $g++;
       
     } else echo '<script> alert("من فضلك اكمل البينات")  </script>';
 
    
}

echo '    <tr>
    <td>المجموع</td>
    <td></td>
<td> '.$total.'</td>
    </tr>
  </table>
  </div>';

 $casherr1= $_SESSION['casher_name'];
$Query2 = "INSERT INTO   `day`  (casherr, data, time, sale_pro , total, maksb) VALUES ('$casherr1','$date','$time', '$text',$total , $alm)";

        $Sql2 = mysqli_query($DB->Connect() , $Query2);
        
        
        
}

          if(isset($_POST["sale_day"]))
        {
                  $day =$DB->Select('day','','');
               echo ' 
                   <div style="position:absolute;margin-top: 250px; margin-left: 1490px ;"> 
         <a href="http://localhost/market_fareda/casher_page.php" class="close" data-dismiss="alert" aria-label="close" style="color:red ; font-weight: bold;font-size:20px;" >x</a>
            </div>
     <div style="position:absolute;margin-top: 280px; margin-left: 665px">                 
  <table style="width:120%; border-collapse: collapse;">
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
                  <td style=" font-size : 40px;color:red; width: 175px; "> حساب اليوم</td>
                   <td> </td>
                          <td> </td>
                          <td> </td>
                          <td style=" font-size : 40px;color:red;">'.$total_day.'</td> 
                          
                                 
                           </tr>";
                            
                         <tr >
                  <td style=" font-size : 40px;color:red; width: 175px; "> مكسب اليوم</td>
                   <td> </td>
                          <td> </td>
                          <td> </td>
                         
                          
                          <td style=" font-size : 40px;color:red;">'.$maksb_alyom.'</td>         
                           </tr>";
                            

                           </table>';
                  
                   echo '</div>';
              
              
        }

                   
                          ?>
            
        
       
        </body>
    
    
</html>
<?php
} else {
   echo '<script>window.location="index.php"</script>';     
}
?>
