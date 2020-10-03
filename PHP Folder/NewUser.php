<?php
include('connect.php');
//saves errors
$errors =array('','','','','','','','');
//saves users input when submit is clicked
$Email=$password=$LastName=$FirstName=$Age=$SocialSecurity=$Address1=$address2='';

if(isset($_POST['submit'])){
  if (empty($_POST['Email'])) {
    $errors[0] = "Email is required";
  }else {
    $email = $_POST['email']
    //vaild email check
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[0] =  "Email must be valid";
    }
  }
  //vaild Password check
  if (empty($_POST['Password'])) {
    $errors[1] = "Password is required";
  }else {
    $password=$_POST['Password'];
    if(!preg_match($password, '/^[a-z][A-Z][1-9]{9,255}$/'){
    $errors[1] =  " Enter a valid password with a lenth of above 9 and no special characters";
  }
  }

  //vaild LastName check
  if (empty($_POST['LastName'])) {
    $errors[2] = "Last Name is required";
  }else {
    $LastName=$_POST['LastName'];
    if(!preg_match($LastName, '/^[a-z][A-Z][1-9]{9,255}$/'){
  $errors[2] =  " Enter a valid Last Name with a lenth of above 9 and no special characters";
  }
}

  //vaild FirstName
  if (empty($_POST['FirstName'])) {
    $errors[3] =  "Last Name is required";
  }else {
    $FirstName=$_POST['FirstName'];
    if(!preg_match($LastName, '/^[a-z][A-Z][1-9]{9,255}$/'){
    $errors[3] =  " Enter a valid First Name with a lenth of above 9 and no special characters";
  }
  }
  //vaild Age check
  if (empty($_POST['Age'])) {
    $errors[4] =  "Age is required";
  }else {
    $Age=$_POST['Age'];
    if(!preg_match($Age, '/^[a-z][A-Z][1-9]{9,255}$/'){
    $errors[4] =  " Enter a valid Age with a lenth of above 9 and no special characters";
  }
  }
  //vaild SocialSecurity check
  if (empty($_POST['SocialSecurity'])) {
    $errors[5] =  "Social Security is required";
  }else {
    $SocialSecurity=$_POST['SocialSecurity'];
    if(!preg_match($SocialSecurity, '/^[a-z][A-Z][1-9]{9,255}$/'){
    $errors[5] =  " Enter a valid Social Security with a lenth of above 9 and no special characters";
  }
  }
  //vaild Address1 check
  if (empty($_POST['Address1'])) {
    $errors[6] =  "Address1 is required";
  }else {
    $Address1=$_POST['Address1'];
    if(!preg_match($Address1, '/^[a-z][A-Z][1-9]{9,255}$/'){
    $errors[6] =  " Enter a valid Address1 with a lenth of above 9 and no special characters";
  }
  }
  //vaild Address2 check
  if (!empty($_POST['Address2'])) {
    $Address2=$_POST['Address2']];
    if(!preg_match($address2, '/^[a-z][A-Z][1-9]{9,255}$/'){
    $errors[7] =  " Enter a valid Address2 with a lenth of above 9 and no special characters";
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
        //gets Email
        <label for="">Enter Your Email:</label><br>
        <input type="text" name="Email" value="Example@BigBank.com"><br>
        <div class="red-text"><?php echo $errors[0]; ?></div>
        //gets Password
        <label for="">Password:</label><br>
        <input type="password" name="Password" value="Password123"><br>
        <div class="red-text"><?php echo $errors[1]; ?></div>
        //get LastName
        <label for="">Last name:</label><br>
        <input type="text" id="LastName" name="LastName" value="Brad"><br>
        <div class="red-text"><?php echo $errors[2]; ?></div>
        //get FirstName
        <label for="">First name:</label><br>
        <input type="text" id="FirstName" name="FirstName" value="Beth"><br>
        <div class="red-text"><?php echo $errors[3]; ?></div>
        //get Age
        <label for="">Age</label><br>
        <input type="number" name="Age" value="Age"><br>
        <div class="red-text"><?php echo $errors[4]; ?></div>
        //get SocialSecurity
        <label for="">Social Security:</label><br>
        <input type="text" name="SocialSecurity" value="SocialSecurity"><br>
        <div class="red-text"><?php echo $errors[5]; ?></div>
        //get Address1
        <label for="">Address1:</label><br>
        <input type="text" name="Address1" value="Address1"><br>
        <div class="red-text"><?php echo $errors[6]; ?></div>
        //get address2
        <label for="">Address2:</label><br>
        <input type="text" name="address2" value="address2"><br>
        <div class="red-text"><?php echo $errors[7]; ?></div>


        <input type="text" name="" value="">
        <div class="center">
          <input type="submit" name="submit" value="submit">
        </div>
      </form>
    </section>
  </body>
</html>
