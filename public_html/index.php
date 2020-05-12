<?php

require_once(__DIR__ . '/../config/config.php');

$app = new MyApp\Controller\Index();

$app->run();

 ?>

 <!DOCTYPE html>
 <html lang="ja" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Home</title>
     <link rel="stylesheet" href="styles.css">
   </head>
   <body>
     <div id="container">
       <form action="logout.php" method="post" id="logout">
         <?= h($app->me()->email); ?><input type="submit" value="Log Out">
         <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
       </form>
       <h1>登録者数<span class="fs12">(<?= count($app->getValues()->users); ?>)</span></h1>
       <p>ログインに成功しました。</p>
     </div>
   </body>
 </html>
