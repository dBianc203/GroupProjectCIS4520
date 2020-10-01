<?php
include('connect.php');
if(isset($_POST['submit'])){
  //input validation will be improved
  if (empty($_POST['Email'])) {
    echo "Email is required";
  }else {
    echo htmlspecialchars($_POST['Email']);
  }
  if (empty($_POST['Password'])) {
    echo "Password is required";
  }else {
    echo htmlspecialchars($_POST['Password']);
  }
  if (empty($_POST['LastName'])) {
    echo "Last Name is required";
  }else {
    echo htmlspecialchars($_POST['LastName']);
  }
  if (empty($_POST['Age'])) {
    echo "Age is required";
  }else {
    echo htmlspecialchars($_POST['Age']);
  }
  if (empty($_POST['SocialSecurity'])) {
    echo "Social Security is required";
  }else {
    echo htmlspecialchars($_POST['SocialSecurity']);
  }
  if (empty($_POST['Address1'])) {
    echo "Address1 is required";
  }else {
    echo htmlspecialchars($_POST['Address1']);
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
        //gets Email
        <label for="">Enter Your Email:</label><br>
        <input type="text" name="Email" value="Example@BigBank.com"><br>
        //gets Password
        <label for="">Password:</label><br>
        <input type="password" name="Password" value="Password123"><br>
        //get LastName
        <label for="">Last name:</label><br>
        <input type="text" id="LastName" name="LastName" value="Brad"><br>
        //get FirstName
        <label for="">First name:</label><br>
        <input type="text" id="FirstName" name="FirstName" value="Beth"><br>
        //get Age
        <label for="">Age</label><br>
        <input type="number" name="Age" value="Age"><br>
        //get SocialSecurity
        <label for="">Social Security:</label><br>
        <input type="text" name="SocialSecurity" value="SocialSecurity"><br>
        //get Address1
        <label for="">Address1:</label><br>
        <input type="text" name="Address1" value="Address1"><br>
        //get address2
        <label for="">Address2:</label><br>
        <input type="text" name="address2" value="address2"><br>


        <input type="text" name="" value="">
        <div class="center">
          <input type="submit" name="submit" value="submit">
        </div>
      </form>
    </section>
  </body>
</html>
