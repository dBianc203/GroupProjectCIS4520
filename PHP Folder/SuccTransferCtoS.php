<?php
session_start()

?>
<!DOCTYPE html>
<html>
<head>
  <title> Successful Transfer </title>
  <link rel="stylesheet" href="CSS Folder\Successful.css">
</head>
<body>
  <div class="Question">
 You've successfully Transferred <?php echo number_format ($_POST["TransferAmount"]);?> from your checking to savings.
 <?php 
 $first_number = $_POST["TransferAmount"];
 $second_number = $_SESSION["SavingsAccount"];
 $Background_number = $_SESSION["CheckingAccount"];
 
 $Background_balance = (($Background_number)-($first_number));
 
 $new_balance = (($second_number)+($first_number));
 echo 'Your new balance is ';
 print ($new_balance);
 $_SESSION["SavingsAccount"] = ($new_balance);
 $_SESSION["CheckingAccount"] = ($Background_balance);
 
 ?>
</div>
<div class="btn-group1">
  <a href="ATM Front page.html"><button>Continue to main screen</button>


</body>
</html>
