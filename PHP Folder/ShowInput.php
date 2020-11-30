<?php

session_start();
$_SESSION["CheckingAccount"] = 2500;
$_SESSION["SavingsAccount"] = 5000;
echo 'Here is your Checking Account Balance:' .$_SESSION["CheckingAccount"].'<br>';
echo 'Saving Account Balance :' .$_SESSION["SavingsAccount"].'<br>';

?>
<html>
<a href="ATMChoices.php?sessionID=.$sessionID"><button type="submit">Continue</button>


</html>
