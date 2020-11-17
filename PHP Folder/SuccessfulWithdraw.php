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
 You successfully withdrew <?php echo number_format ($_POST["QuickDraw"]); ?> from your account

 <?php 				
 $first_number = $_POST["QuickDraw"];

 $Background_number = $_SESSION["CheckingAccount"];
 
 
 $new_balance = (($Background_number)-($first_number));
 echo 'Your new balance is ';
 print ($new_balance);
 $_SESSION["CheckingAccount"] = ($new_balance);

	?>
</div>
<div class="btn-group1">
  <a href="ATM Front page.html"><button>Continue to main screen</button>

</body>
</html>