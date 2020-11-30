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
<<<<<<< HEAD
    You successfully deposited $<?php echo number_format($_POST["DepoAmount"]); ?> into your savings account

<?php
 $first_number = $_POST["DepoAmount"];

 $Background_number = $_SESSION["SavingsAccount"];


=======
    You attempted to deposit $<?php echo number_format($_POST["DepoAmount"]); ?> into your savings account
<?php 				
 $first_number = $_POST["DepoAmount"];
 if ($first_number > 300) {
	echo "You can't deposit that amount, please go back and try again";
}
else if ($first_number < 0) {
	echo "You can't deposit that amount, please go back and try again";
}
else{
 $Background_number = $_SESSION["SavingsAccount"]; 
>>>>>>> b14d9fa6d38e4232742729c9bfbed06a56fb3f2b
 $new_balance = (($Background_number)+($first_number));
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
