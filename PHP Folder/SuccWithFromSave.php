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
    You successfully withdrew $<?php echo number_format($_POST["WithAmount"]); ?> from your savings account
    
<?php 				
 $first_number = $_POST["WithAmount"];

 $Background_number = $_SESSION["SavingsAccount"];
 
 
 $new_balance = (($Background_number)-($first_number));
 echo 'Your new balance is $';
 print ($new_balance);
 $_SESSION["SavingsAccount"] = ($new_balance);

	?>
</div>
<div class="btn-group1">
  <a href="ATM Front page.html"><button>Continue to main screen</button>


</body>
</html>
