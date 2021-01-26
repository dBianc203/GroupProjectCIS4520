<?php

$host="localhost";
$user="id15442803_devon";
$password="%D}5<fo|M|^i>R_<";
$db="id15442803_banking";

$conn = mysqli_connect($host,$user,$password, $db);
mysqli_select_db($conn, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from LoginForm where User='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysqli_query($sql);
    
    if(mysqli_num_rows($result)==1){
        echo " you have successfully logged in";
        exit();
    }
    else {
        echo "You have entered the incorrect password";
        exit();
        }
    }
    
 ?>
 <!DOCTYPE html>
 <html>
 <style>

     form {
         border: 3px solid #f1f1f1;
     }
     input[type=text],
     input[type=password] {
         width: 100%;
         padding: 12px 20px;
         margin: 8px 0;
         display: inline-block;
         border: 1px solid #ccc;
         box-sizing: border-box;
     }

     button {
         background-color: #4CAF50;
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
<body>

    <h2>Login Form</h2>



        </div>
        <form method "POST" action="#">
        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username"/>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password"/>

            <input type="submit" name="submit" value="LOGIN"/>
             
</form>


</body>

</html>

