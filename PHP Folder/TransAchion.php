<?php
include('timer.php');
$isAdd;
$sql = "SELECT  CheckBal,SavBal  FROM transachions where ID=$ID ORDER BY Reg_date";
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $CheckBal=$row["CheckBal"];
    $SavBal=$row["SavBal"];
  }
}else {
  $sql = "INSERT INTO transachions(CheckBal,SavBal,ID)
         VALUES(2000,2000,$ID)";
}

if($isAdd){
  $sql = "INSERT INTO transachions(CheckBal,SavBal,ID)
         VALUES(($CheckBal+$CheckAdd),($SavBal+$SavAdd),$ID)";
} else {
  $sql = "INSERT INTO transachions(CheckBal,SavBal,ID)
         VALUES(($CheckBal-$CheckAdd),($SavBal-$SavAdd),$ID)";
}
 ?>
