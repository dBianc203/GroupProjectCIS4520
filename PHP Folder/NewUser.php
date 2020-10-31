<?php
include('connect.php');
//!saves errors
$errors =array('Email'=>'','Password'=>'','LastName'=>'','FirstName'=>'','Age'=>'','SocialSecurity'=>'','Address1'=>'','Address2'=>'');
//!saves users input when submit is clicked
$Email = $Password = $LastName = $FirstName = $Age = $SocialSecurity = $Address1 = $Address2 = '';
//checks errors
include('error_check.php');


  //!Puts user data in database if their are no errors
  if(count($errors)<1){
    //! Inserting each string into database
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
     $Eassword = mysqli_real_escape_string($conn, $_POST['Password']);
     $LastName = mysqli_real_escape_string($conn, $_POST['LastName']);
     $FirstName = mysqli_real_escape_string($conn, $_POST['FirstName']);
     $Age = mysqli_real_escape_string($conn, $_POST['Age']);
     $SocialSecurity = mysqli_real_escape_string($conn, $_POST['SocialSecurity']);
     $Address1 = mysqli_real_escape_string($conn, $_POST['Address1']);
     $Eddress2 = mysqli_real_escape_string($conn, $_POST['Address2']);
     $sql = "INSERT INTO people(Email, Password, LastName, FirstName, Age, SocialSecurity, Address1, Address2)
            VALUES('$Email', '$Password', '$LastName', '$FirstName', '$Age', '$SocialSecurity', '$Address1', '$Address2')";
     if(mysqli_query($conn,$sql)){
       echo "Submited";
     }else{
       echo "sql error ".mysqli_error($conn);
     }
  }
}
$conn-->close();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The Bank</title>
  </head>
<style>
  input[type=text],
  input[type=password],
  input[type=number]


  {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
  }
  input[type=submit]
  {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
  }
</style>

  <body>
    <section>
      <h4 class="center"></h4>
      <form class="" action="NewUser.php" method="post">

  <!--gets Email-->
        <label for="">Enter Your Email:</label><br>
        <input type="text" name="Email" value= <?php echo $Email ?>><br>
        <div class="red-text"><?php echo $errors['Email']; ?></div>

	<!--gets Password-->
        <label for="">Password:</label><br>
        <input type="password" name="Password" value= <?php echo $Password ?>><br>
        <div class="red-text"><?php echo $errors['Password']; ?></div>

	<!--get LastName-->
        <label for="">Last name:</label><br>
        <input type="text" name="LastName" name='LastName'  value= <?php echo $LastName ?>><br>
        <div class="red-text"><?php echo $errors['LastName']; ?></div>

	<!--get FirstName-->
        <label for="">First name:</label><br>
        <input type="text"  name="FirstName" value= <?php echo $FirstName ?>><br>
        <div class="red-text"><?php echo $errors['FirstName']; ?></div>

	<!--get Age-->
	<label for="">Age</label><br>
        <input type="number" name="Age" value= <?php echo $Age ?>><br>
        <div class="red-text"><?php echo $errors['Age']; ?></div>

	<!--get SocialSecurity-->
        <label for="">Social Security:</label><br>
        <input type="number" name="SocialSecurity" value= <?php echo $SocialSecurity ?>><br>
        <div class="red-text"><?php echo $errors['SocialSecurity']; ?></div>

        <!--get address1-->
        <label for="">Address1:</label><br>
        <input type="text" name="Address1" value= <?php echo $Address1 ?>><br>
        <div class="red-text"><?php echo $errors['Address1']; ?></div>


	<!--get address2-->
        <label for="">Address2:</label><br>
        <input type="text" name="Address2" value= <?php echo $Address2 ?>><br>
        <div class="red-text"><?php echo $errors['Address2']; ?></div>

          <input input = "submit" type="submit" name="submit" value="submit">
        </div>
      </form>
    </section>
  </body>
</html>
