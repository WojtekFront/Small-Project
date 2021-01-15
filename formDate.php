 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
 <?php
// add calender 
//better method is in ajax for choice date for delivery


    date_default_timezone_set('Europe/Warsaw');
     $dayofweek= date("Y-m-d ") ;
     echo "{$dayofweek} <br>";


     $dayPlus = '5';

     // add 3 days to date
     $NewDate=Date('Y-m-d', strtotime('+40 days'));
     echo "{$NewDate} <br>";
     // subtract 3 days from date

echo $dayPlus;

     ?>
 </body>
 </html>