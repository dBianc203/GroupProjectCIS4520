<?php
$sql="SELECT ID FROM people WHERE Password=$Password and Email=$Email"

$ID=mysqli_fetch_assoc(mysqli_query($conn, $sql));
$sql = "INSERT INTO transachions(ID)
        VALUES('$ID')";
echo $ID;
 ?>
