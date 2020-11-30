<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title> Successful Deposit </title>
  <link rel="stylesheet" href="CSS Folder\Successful.css">
</head>
<body>
  <div class="Question">
You attempted to deposit $<?php echo number_format($_POST["DepoAmount"]); ?> into your checking account
<?php

 $first_number = $_POST["DepoAmount"];
 if ($first_number > 300) {
	echo "You can't deposit that amount, please go back and try again";
}
else if ($first_number < 0) {
	echo "You can't deposit that amount, please go back and try again";
}
else {
 $Background_number = $_SESSION["CheckingAccount"];
 $new_balance = (($Background_number)+($first_number));
 echo 'Your new balance is $';
 print ($new_balance);
 $_SESSION["CheckingAccount"] = ($new_balance);
}
?>
</div>
<div class="btn-group1">
  <a href="ATM Front page.php?sessionID=.$sessionID"><button>Continue to main screen</button>

</body>
</html>
