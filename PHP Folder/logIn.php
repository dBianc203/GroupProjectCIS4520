<?php
include('connect.php');
include('error_check.php');
session_start();

//!Stores ID of the user so we can index on the ID and not have to deal with the email anymore when looking up transachions;
$ID=0;


if(isset($_POST['submit'])){
  //!Puts user data in database if their are no errors
  if(!$errorBool){
    //! Inserting each string into database
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $Password = mysqli_real_escape_string($conn, $_POST['Password']);
    //! querys server and sets it to a 2darray
     $sql = "SELECT Email, Password, ID FROM people WHERE Email='$Email' AND Password='$Password'";
     //!error check
     if(mysqli_query($conn,$sql)){
       $result = $conn->query($sql);

     	if ($result->num_rows > 0) {
        	//! output data of each row in this case their should only be one row
        	while($row = $result->fetch_assoc()) {
        	$ID=$row["ID"];
	 }

          $sql = "INSERT INTO sessions(ID,endPT,startPT)
                 VALUES('$ID',ADDTIME(NOW(),1800),NO())";
                 
     $sql = "SELECT sessionID  FROM sechions WHERE ID='$ID'";

     while($row = $result->fetch_assoc()) {
     $sessionID=$row["sessionID"];

    }
          $_SESSION['sessionID']=$sessionID;
          header("Location: ATMChoices.php?sessionID=".$sessionID);
   exit();

	} else {
  echo "0 results";
}
    //!prints out error
     }else{
       echo "sql error ".mysqli_error($conn);
     }
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




     <form  class="" action="logIn.php" method="post">
              <div class="container">
                <!--gets Email-->
                <label for="">Enter Your Email:</label><br>
                <input type="text" name="Email" value= <?php echo $Email ?>><br>
                <div class="red-text"><?php echo $errors['Email']; ?></div>

                <!--gets Password-->
                <label for="">Password:</label><br>
                <input type="password" name="Password" value= <?php echo $Password ?>><br>
                <div class="red-text"><?php echo $errors['Password']; ?></div>

                <button input = "submit" type="submit" name="submit" value="submit">Login</button>
     </form>
     <form  class="" action="NewUser.php" method="post">
               <button input = "submit" type="submit" name="submit" value="submit">New User</button>
     </form>


 </body>

 </html>
