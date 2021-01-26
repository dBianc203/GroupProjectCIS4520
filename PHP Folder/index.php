<?php
session_start();
require 'db_connection.php';
require 'login.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
header('Location: ShowInput.php');
exit;
}
?>
<!DOCTYPE html>
<style>

    form {
        border: 3px solid #f1f1f1;
    }
    input[type=email],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: green;
		border: 3px solid #999999;
		border-radius: 5px;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    .container {
        padding: 16px;
    }

</style>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

</head>

<body>

<form action="" method="post">
<h2>User Login</h2>

<div class="container">
<label for="email"><b>Email</b></label>
<input type="email" placeholder="Enter email" id="email" name="user_email" required>

<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter password" id="password" name="user_password" required>

<button type="submit">Login</button>
</div>
<?php
if(isset($success_message)){
echo '<div class="success_message">'.$success_message.'</div>'; 
}
if(isset($error_message)){
echo '<div class="error_message">'.$error_message.'</div>'; 
}
?>
<div class="container">
<a href="signup.php"><button type="button" class="Regbtn">New User?</button></a>
</div>
</form>
</body></html>
<!--
<DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=devie-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="1e=edge">
<title>Document</title>
<style>
body{
color: white;
background: green;
</style>
</head>
<body>
 <h1>Enter the Website!</h1>
 <a href="LoginPage.html"><button>Continue to Login Screen</button>
</body>
</html>
-->
