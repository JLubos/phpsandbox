<?php
  session_start();

    print_r($_SESSION);

  $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest' ;
  $name = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed' ;


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>PHP Sessions</title>
  </head>
  <body>
    <h1>Hello <?php echo $name; ?></h1>
  </body>
</html>
