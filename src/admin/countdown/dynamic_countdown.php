<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tomwer</title>
    <!-- <link rel="stylesheet" href="../admin/countdown/css/style.css"> -->
  </head>
  <body>
    <?php
    $date =date('2023-02-09');
    $time =date('12:25:00');
    $date_today =$date . ' ' . $time;

     ?>
     <script type="text/javascript">
       let count_id ="<?php echo $date_today; ?>";
       let count_downdate = new Date(count_id).getTime();

       let x = setInterval( function() {
         let now = new Date().getTime();

         let distance = count_downdate - now;

         let days = Math.floor(distance/(1000*60*60*24));
         let hours = Math.floor((distance%(1000*60*60*24))/(1000*60*60));
         let minutes = Math.floor((distance%(1000*60*60))/(1000*60));
         let seconds = Math.floor((distance%(1000*60))/1000);

      document.getElementById('demo').innerHTML = days + "d" + hours + "h" + minutes + "m" + seconds + "s";

      if(distance<0){
        clearInterval();
        document.getElementById('demo').innerHTML ="Expired";
      }

    },1000);
     </script>

     <?php

echo '<p id="demo" style="font-size:30px;"></p>';
      ?>
  </body>
</html>
