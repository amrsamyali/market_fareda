<head>
</head>
<body>
     <meta charset="UTF-8">
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
            
    
     <script language="Javascript">
var i=1;
var d=50;
function creatediv()
{
mNewObj = document.createElement('input');
mNewObj.type="text"; 
mNewObj.setAttribute("list", "browsers");
document.getElementById("tid").appendChild(mNewObj);

var y = document.createElement("DATALIST");
    y.setAttribute("id", "browsers");
    document.getElementById("tid").appendChild(y);

var z = document.createElement("OPTION");
    z.setAttribute("value", "Chrome");
    document.getElementById("browsers").appendChild(z);


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
                    
    ?>
 
            
</body>