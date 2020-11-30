<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="CSS Folder\Successful.css">
</head>
<body>
  <div class="Question">
 You attempted to withdraw <?php echo number_format ($_POST["QuickDraw"]); ?> from your account <br>

 <?php
 $first_number = $_POST["QuickDraw"];

 $Background_number = $_SESSION["CheckingAccount"];
  if ($Background_number < 20){
	 echo 'You failed to withdraw from this account (negative balance will occur)';
 }
 else {
 $new_balance = (($Background_number)-($first_number));
  if ($new_balance < 0)
 {
	 $new_balance = 0;
 }
 echo 'Your new balance is ';
 print ($new_balance);
 $_SESSION["CheckingAccount"] = ($new_balance);
 }
	?>
</div>
<div class="btn-group1">
  <a href="ATM Front page.php?sessionID=.$sessionID"><button>Continue to main screen</button>

</body>
</html>
