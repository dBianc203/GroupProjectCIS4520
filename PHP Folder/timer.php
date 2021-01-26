<?php
include('connect.php');
session_start();
$sessionID=$_GET['$sessionID'];

$sql = "SELECT  ID, endPT, startPT  FROM sessions where sessionID='$sessionID' ORDER BY startPT DESC";
if(mysqli_query($conn,$sql)){
  $result = $conn->query($sql);

 if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $endPT=$row["endPT"];
      $startPT=$row["endPT"];
      $ID=$row["ID"];

      }
     $_SESSION['sessionID']=$sessionID;
if($sessionID==null||(!($endPT>time() && $startPT<time()))){
  $_SESSION['sessionID']=$sessionID;
  header("Location: logIn.php?sessionID=".$sessionID);
exit();
}else {
  $sql = "INSERT INTO sessions(ID,endPT,startPT)
         VALUES($ID,ADDTIME(CAST(CURTIME() AS TIME),1800),CAST(CURTIME() AS TIME))";
    }
} else {
echo "0 results";
  $_SESSION['sessionID']=$sessionID;
  header("Location: logIn.php?sessionID=".$sessionID);
exit();

        }
}else{
  echo "sql error ".mysqli_error($conn);
}
 ?>
