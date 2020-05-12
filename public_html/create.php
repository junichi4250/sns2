<?php

require_once(__DIR__ . '/../config/config.php');

$app = new MyApp\Controller\Create();

$create = $app->createProcess();

 ?>

 <!DOCTYPE html>
 <html lang="ja" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>create</title>
     <link rel="stylesheet" href="styles.css">
   </head>
   <body>
     <div id="container">
       <a href="index.php">Back</a>
       <form class="" action="index.php" method="post">
         <input type="text" name="create">
       </form>
       <ul>
      
       </ul>
     </div>
   </body>
 </html>
