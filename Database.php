<?php
class Database 
{
   private $con;
      public function __construct()
      {
          $this->con = $this->Connect();  // To Connect With Database 
      }
      //Connect Database
      public function Connect()
      {
       $localhost="localhost";
       $root="root";
       $password="";
       $db_name = "market_fareda";
       $conn = mysqli_connect($localhost,$root,$password,$db_name);
     if($conn)
     {
        mysqli_query($conn,"SET character_set_results=utf8");
        mb_language('uni'); 
        mb_internal_encoding('UTF-8');
        mysqli_query($conn,"set names 'utf8'");
        return $conn;
     }
     else
     {
         throw new Exception("Error !! To Connect MySql");  
     }
     }
     //Close Database
     public function Close()
     {
         mysqli_close();
     }
    

     //Delete
     public function Delete($TableName,$ID,$where='id')
    {
        $Query ="DELETE FROM `$TableName` WHERE `$where`='$ID'"; 
        $Sql = mysqli_query($this->con,$Query);
        if($Sql)  return TRUE;
        else  throw new Exception("Sql Not Deleted");   
    }

    
    
    //Add   
    public function Add($TableName,$Data)
    {
        foreach ($Data as $key => $value)
        {
        $Keys[] = $key;
        $Values[] = $value;
        }
        $Names = implode($Keys,",");
        $Record = '"'.implode($Values,'","').'"';        
        $Query = "INSERT INTO $TableName ($Names) VALUES ($Record)";
        $Sql = mysqli_query($this->con,$Query);
     
        
    }


    
    //Update
    public function Update($TableName,$Data,$ID)
     {
        if(is_array($Data))
        { 
        $Query="UPDATE `$TableName` SET ";
        foreach ($Data as $key => $value) 
        {
         $Query .="`".$key."` = '".$value."' ,";            
        }
        $Pat="+-0/*";
        $Query .=$Pat;
        $Query = str_replace(",".$Pat," ",$Query);
        $Query .=" WHERE `id`=$ID";
        $Sql = mysqli_query($this->con,$Query);
        if(!$Sql) echo  $Query;
        else  return true;
        }
        else  throw new Exception("Data Is No Array"); 
     }
     
   



    public function get_all_assoc($result){
        $array=array();
        while($row= mysqli_fetch_assoc($result)){
            $array[]=$row;
        }
        return $array;  
    }     


    
       public function Select($table, $Date = "", $where = "")
       {
       $q="";
       $w="";
       if($where!=""){
           foreach ($where as $key=>$value){
           $w.="$key='$value'";}
           $w= "where ".rtrim($w,",");
       }
       if($Date!=""){
       foreach ($Date as $key){
           $q.="$key,";
       }
       $q=  rtrim($q,",");
       }
       else
       {
           $q="*";
       }
       
       $Query="SElECT $q FROM $table $w";
       $sql=  mysqli_query($this->con,$Query);
       if($sql){
          return $this->get_all_assoc($sql);      
       }
       else{
          return FALSE;  
       }
   }
  


   //to select query
    public function Select_Query($Query)
    {
       $Sql = mysqli_query($Query);
        if(!$Sql)  throw new Exception("Error : Sql Cannot Excuted Query .");
        $Num = mysqli_num_rows($this->con,$Sql);
        if($Num >= 0)
        {
             for($i=0;$i<$Num;$i++)
             {
                 $Data[$i] =@mysqli_fetch_array($Sql);
             }
        }
        return @$Data; 
    }  
    
    public function Upload($file,$maxsize,$extensions,$path)
    {
        $Filename=$file['name'];
        $FileExtension= @strtolower(end(explode(".",$Filename)));
        $FileSize=$file['size'];
        $FileTmp=$file['tmp_name'];
        if(in_array($FileExtension,$extensions) == FALSE OR $maxsize<$FileSize)
        {
            return FALSE;
        }
        else 
        {
        $random = rand(0,9999);
        $Url =$path."_".$random.$Filename;
        $upload=move_uploaded_file($FileTmp,$Url);
        }
        return $Url;
    }
    

    //Login
    public function Login($UserName,$Password)
    { session_start();
      $Query ="SELECT * FROM `person` WHERE user_name ='$UserName' and password = '$Password'";
      $Sql = mysqli_query($this->con,$Query);
      $Num = mysqli_num_rows($Sql);
    
      if($Num == 1) 
      {   $row= mysqli_fetch_assoc($Sql);
       
          $_SESSION['casher_name']=$row['user_name'];
          $_SESSION['type_id'] = $row['type_id']; 
         
          if($row['type_id']==1)
          {
              echo '<script>window.location="admin_home.php"</script>';  
          }
         else if($row['type_id']==2)
              
           {
             echo '<script>window.location="casher_page.php"</script>';  
              
           }
              
      } else {echo '<script> alert("من فضلك ادخل بينات صحيحه")  </script>';}
    }

    
   
}
