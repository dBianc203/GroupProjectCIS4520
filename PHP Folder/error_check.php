<?php

//!saves errors
$errors =array('Email'=>'','Password'=>'','LastName'=>'','FirstName'=>'','Age'=>'','SocialSecurity'=>'','Address1'=>'','Address2'=>'');
//!saves users input when submit is clicked
$Email = $Password = $LastName = $FirstName = $Age = $SocialSecurity = $Address1 = $Address2 ='';
//gives a bool value if the errors contains any errors so you dont have to write a buntch of or statments
$errorBool=false;
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
}
//checks if their are any errors in the array
foreach($errors as $name){
  if ($name!="") {
    $errorBool==true;
  }
}

 ?>
