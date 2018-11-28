<html>
<head>
     <meta charset="UTF-8">
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
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form> 
First name: <input type="text"  list="txtHin" onkeyup="showHint(this.value)">
<datalist id="txtHin">
    <option id="txtHint">
   
  </datalist>
</form>

<form> 
First name: <input type="text"  list="txtHin" onkeyup="showHint(this.value)">
<datalist id="txtHin">
    <option id="txtHint">
   
  </datalist>
</form>



</body>
</html>


