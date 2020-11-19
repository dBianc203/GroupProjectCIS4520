<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title> Successful Withdraw </title>
  <link rel="stylesheet" href="CSS Folder\Successful.css">
</head>
<body>
  <div class="Question">
    You attempted to withdraw $<?php echo number_format($_POST["WithAmount"]); ?> from your savings account <br>
    
<?php 				
 $first_number = $_POST["WithAmount"];

 $Background_number = $_SESSION["SavingsAccount"];
  if ($Background_number < $first_number){
	 echo 'You failed to withdraw from this account (negative balance will occur)';
 }
 
  else {
 $new_balance = (($Background_number)-($first_number));
  if ($new_balance < 0)
 {
	 $new_balance = 0;
 }
 echo 'Your new balance is $';
 print ($new_balance);
 $_SESSION["SavingsAccount"] = ($new_balance);
  }
	?>
</div>
<div class="btn-group1">
  <a href="ATM Front page.html"><button>Continue to main screen</button>


</body>
</html>
