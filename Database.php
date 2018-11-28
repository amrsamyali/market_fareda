<?php
class Database 
{
      public function __construct()
      {
          $this->Connect();  // To Connect With Database 
      }
      

      //Connect Database
      public function Connect()
      {
       $localhost="localhost";
       $root="root";
       $password="amrsamy";
      @$Connect = mysql_connect($localhost,$root,$password);

     if($Connect)
     {
      $DB = mysql_select_db("market_fareda");
      mysql_set_charset("utf8");
      if(!$DB)
          throw new Exception("Error To Connect To Select DataBase");
     }
     else
     {
         throw new Exception("Error !! To Connect MySql");  
     }
     }
   



  //Close Database
     public function Close()
     {
         mysql_close();
     }
    

     //Delete
     public function Delete($TableName,$ID,$where='id')
    {
        $Query ="DELETE FROM `$TableName` WHERE `$where`='$ID'"; 
        $Sql = mysql_query($Query);
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
        $Sql = mysql_query($Query);
     
        
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
        $Sql = mysql_query($Query);
        if(!$Sql) echo  mysql_error();
        else  return true;
        }
        else  throw new Exception("Data Is No Array"); 
     }
     
   



    public function get_all_assoc($result){
        $array=array();
        while($row= mysql_fetch_assoc($result)){
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
       $sql=  mysql_query($Query);
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
       $Sql = mysql_query($Query);
        if(!$Sql)  throw new Exception("Error : Sql Cannot Excuted Query .");
        $Num = mysql_num_rows($Sql);
        if($Num >= 0)
        {
             for($i=0;$i<$Num;$i++)
             {
                 $Data[$i] = mysql_fetch_array($Sql);
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
      $Sql = mysql_query($Query);
      $Num = mysql_num_rows($Sql);
    
      if($Num == 1) 
      {   $row= mysql_fetch_assoc($Sql);
       
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
