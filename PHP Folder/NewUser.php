<?php
include('connect.php');
//!saves errors
$errors =array('Email'=>'','Password'=>'','LastName'=>'','FirstName'=>'','Age'=>'','SocialSecurity'=>'','Address1'=>'','Address2'=>'');
//!saves users input when submit is clicked
$Email = $Password = $LastName = $FirstName = $Age = $SocialSecurity = $Address1 = $Address2 = '';

if(isset($_POST['submit'])){
  if (empty($_POST['Email'])) {
    $errors['Email'] = "Email is required";
  }else {
    $Email = $_POST['Email'];
    //!vaild email check
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $errors['Email'] =  "Email must be valid";
    }
  }

  //!vaild Password check
  if (empty($_POST['Password'])) {
    $errors['Password'] = "Password is required";
  }else {
    $Password=$_POST['Password'];
    if(!preg_match('/^[a-zA-Z1-9]{9,255}$/',$Password)){
    $errors['Password'] =  " Enter a valid password with a lenth of above 9 and no special characters";
  }
  }
  //!vaild LastName check
  if (empty($_POST['LastName'])) {
    $errors['LastName'] = "Last Name is required";
  }else {
    $LastName=$_POST['LastName'];
    if(!preg_match('/^[a-zA-Z1-9]{1,255}$/',$LastName)){
  $errors['LastName'] =  " Enter a valid Last Name with no special characters";
  }
}

  //!vaild FirstName
  if (empty($_POST['FirstName'])) {
    $errors['FirstName'] =  "Last Name is required";
  }else {
    $FirstName=$_POST['FirstName'];
    if(!preg_match('/^[a-zA-Z1-9]{1,255}$/', $LastName)){
    $errors['FirstName'] =  " Enter a valid First Name with no special characters";
  }
  }

  //!vaild Age check
  if (empty($_POST['Age'])) {
    $errors['Age'] =  "Age is required";
  }else {
    $Age=$_POST['Age'];
    if(!preg_match('/^[1]?[1-9][1-9]$/',$Age)){
    $errors['Age'] =  " Enter a valid Age";
  }
  }

  //!vaild SocialSecurity check
  if (empty($_POST['SocialSecurity'])) {
    $errors['SocialSecurity'] =  "Social Security is required";
  }else {
    $SocialSecurity=$_POST['SocialSecurity'];
    if(!preg_match('/^[a-zA-Z1-9]{9,255}$/',$SocialSecurity)){
    $errors['SocialSecurity'] =  " Enter a valid Social Security with a lenth of above 9 and no special characters";
  }
  }

  //!vaild Address1 check
  if (empty($_POST['Address1'])) {
    $errors['Address1'] =  "Address1 is required";
  }else {
    $Address1=$_POST['Address1'];
    if(!preg_match('/^[a-zA-Z1-9\s]{1,255}$/', $Address1)){
    $errors['Address1'] =  " Enter a valid Address1 with a lenth of above 9 and no special characters";
  }
  }

  //!vaild Address2 check
    if (!empty($_POST['Address2'])){
      $Address2=$_POST['Address2'];
      if(!preg_match('/^[a-zA-Z1-9]{1,255}$/', $Address2)){
        $errors['Address2'] =  " Enter a valid Address1 with a lenth of above 1 and no special chachars or space";
      }
  }



  //!Puts user data in database if their are no errors
  if(array_filter($errors)){
    //! Inserting each string into database
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
     $password = mysqli_real_escape_string($conn, $_POST['Password']);
     $LastName = mysqli_real_escape_string($conn, $_POST['LastName']);
     $FirstName = mysqli_real_escape_string($conn, $_POST['FirstName']);
     $Age = mysqli_real_escape_string($conn, $_POST['Age']);
     $SocialSecurity = mysqli_real_escape_string($conn, $_POST['SocialSecurity']);
     $Address1 = mysqli_real_escape_string($conn, $_POST['Address1']);
     $address2 = mysqli_real_escape_string($conn, $_POST['Address2']);
     $sql = "INSERT INTO people(Email, Password, LastName, FirstName, Age, SocialSecurity, Address1, Address2)
            VALUES('$Email', '$Password', '$LastName', '$FirstName', '$Age', '$SocialSecurity', '$Address1', '$Address2')";
     if(mysqli_query($conn,$sql)){
       echo "Hell yha";
     }else{
       echo "sql error ".mysqli_error($conn);
     }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The Bank</title>
  </head>
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
        <input type="number" name="Age" value= <?php echo $Age ?>>><br>
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
