<?php
$pixel = $_GET['pixel']
?>

<!DOCTYPE html>
        <html>
         <head>
           <title>Thank You Page</title>
           <meta charset="utf-8">
         </head>
         <body style="background: aliceblue;"> 
          <h2 style="width: 100%;
            text-align: center;
            margin-top: 50px;">Thank you for your order. Our operator will call you shortly.</h2>
          <?php echo '<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id='.$pixel.'&noscript=1&ev=CompleteRegistration"/>'?>
         </body> 
        </html>