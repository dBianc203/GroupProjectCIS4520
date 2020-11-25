<?php
include('connect.php');
include('error_check.php');
include('timer.php');



 ?>
 <!DOCTYPE html>
<html>
<title> Home Page </title>
<style>
.btn-group button {
  background-color: #4CAF50;
  border: 3px solid green;
  color: white;
  padding: 10px 24px;
  cursor: pointer;
  width: 50%;
  display: block;
  height: 100px;
  position: relative;
  margin: 5px;
  top: 300px;
  left: 500px;
}

.btn-group button:not(:last-child) {
  border-bottom: none;
}

.btn-group button:hover {
  background-color: #3e8e41;
}
</style>
<body>
  <form  class="" action="ATMChoices.php" method="post">

<div class="btn-group">
  <button input = "submit" type="submit" name="submit" value="submit">Login</button>
  <a href="Demo.html"><button>Budget Your Money</button>

</div>
</form>
</body>
</html>
