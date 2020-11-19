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
 You've attempted to Transfer <?php echo number_format ($_POST["TransferAmount"]);?> from your checking to savings. <br>
 <?php 
 
 $first_number = $_POST["TransferAmount"];
 
 $second_number = $_SESSION["SavingsAccount"];
 
 $Background_number = $_SESSION["CheckingAccount"];
  if ($Background_number < first_number){
	 echo 'You failed to transfer account balances(negative balance will occur)';
 }
 else {
 $Background_balance = (($Background_number)-($first_number));
    if ($Background_balance < 0)
 {
	 $Background_balance = 0;
 }
 
 $new_balance = (($second_number)+($first_number));
 echo 'Your new balance is ';
 print ($new_balance);
 $_SESSION["SavingsAccount"] = ($new_balance);
 $_SESSION["CheckingAccount"] = ($Background_balance);
 }
 ?>
</div>
<div class="btn-group1">
  <a href="ATM Front page.html"><button>Continue to main screen</button>


</body>
</html>
