<?php
//mysqli
//connect
$conn = mysqli_connect('localhost','Public','pa$$word207', 'BANKING');
//connection checkdatef
if(!$conn){
  echo "connection error " . myspli_connect_error();
} //else{ echo "All good";}


 ?>
