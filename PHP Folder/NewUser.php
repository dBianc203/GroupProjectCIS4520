<?php
include('connect.php');
//!saves errors
$errors =array('Email'=>'','Password'=>'','LastName'=>'','FirstName'=>'','Age'=>'','SocialSecurity'=>'','Address1'=>'','Address2'=>'');
//!saves users input when submit is clicked
$Email = $Password = $LastName = $FirstName = $Age = $SocialSecurity = $Address1 = $Address2 = '';
//checks errors
include('error_check.php');


  //!Puts user data in database if their are no errors
  if(true){
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
include('..\Html%Folder\NewUser.html');
?>
