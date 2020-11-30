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
<<<<<<< HEAD

<?php
=======
<?php 				
>>>>>>> b14d9fa6d38e4232742729c9bfbed06a56fb3f2b
 $first_number = $_POST["WithAmount"];

 $Background_number = $_SESSION["SavingsAccount"];
  if ($Background_number < $first_number){
	 echo 'You failed to withdraw from this account (negative balance will occur)';
 }
<<<<<<< HEAD

=======
 else if ($first_number > 300) {
	echo "You can't withdraw that amount, please go back and try again";
}
else if ($first_number < 0) {
	echo "You can't deposit that amount, please go back and try again";
}
>>>>>>> b14d9fa6d38e4232742729c9bfbed06a56fb3f2b
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
<<<<<<< HEAD
  <a href="ATM Front page.php?sessionID=.$sessionID"><button>Continue to main screen</button>


=======
  <a href="ATM Front page.html"><button>Continue to main screen</button>
>>>>>>> b14d9fa6d38e4232742729c9bfbed06a56fb3f2b
</body>
</html>
