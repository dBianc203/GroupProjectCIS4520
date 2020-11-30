
<?php
include('connect.php');
session_start();
$sessionID=$_GET['sessionID'];
//Looks for the ID with a vailded timestamp
$sql = "SELECT  ID  FROM sessions where sessionID='$sessionID' AND endPT>current_timestamp() ORDER BY startPT DESC";
if(mysqli_query($conn,$sql)){
  $result = $conn->query($sql);

 if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $ID=$row["ID"];
      }
     $_SESSION['sessionID']=$sessionID;

if($sessionID==null){
  $_SESSION['sessionID']=$sessionID;
  header("Location: logIn.php?sessionID=".$sessionID);
exit();
}else {
echo "all good";
  $sql = "INSERT INTO sessions(ID,endPT,startPT)
         VALUES($ID,ADDTIME(CAST(CURTIME() AS TIME),1800),CAST(CURTIME() AS TIME))";
        if(!mysqli_query($conn,$sql)){
        echo "sql error ".mysqli_error($conn);
        }
    }
} else {
echo $sessionID;
echo "0 results";
  $_SESSION['sessionID']=$sessionID;
  header("Location: logIn.php?sessionID=".$sessionID);
exit();

        }
}else{
  echo "sql error ".mysqli_error($conn);
}
 ?>
