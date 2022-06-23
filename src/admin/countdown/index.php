<?php
session_start();
// include("../admin/countdown/db.php");
 ?>
 <div id="response"></div>

 <script type="text/javascript">
   sstInterval(function(){
let xmlhttp=new XMLHttpRequest();
xmlhttp.open("GET","response.php",false);
xmlhttp.send(null);

document.getElementById('response').innerHTML=xmlhttp.responseText;
},1000);
 </script>
