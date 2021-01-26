<?php

session_start();
require 'db_connection.php';
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);
$_SESSION["CheckingAccount"] = 2500;
$_SESSION["SavingsAccount"] = 5000;
echo 'Here is your Checking Account Balance:' .$_SESSION["CheckingAccount"].'<br>';
echo 'Saving Account Balance :' .$_SESSION["SavingsAccount"].'<br>';
}else{
header('Location: logout.php');
exit;
}
?>
<html>
<a href="ATMChoices.html"><button type="submit">Continue</button>
<a href="logout.php">Logout</a>


</html>
