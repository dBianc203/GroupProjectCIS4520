<?php
  //mysqli
  //connect
  $conn = mysqli_connect('localhost','Public','pa$$word207', 'BANKING');
  //connection checkdatef
  if(!$conn){
    echo "connection error " . myspli_connect_error();
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php INCLUDE('templates/header.php'); ?>
    <?php include('templates/footer.php'); ?>
    <title></title>
  </head>
  <body>

  </body>
</html>
