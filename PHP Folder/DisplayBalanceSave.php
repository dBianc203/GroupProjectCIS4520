<?php
include('connect.php');

 ?>
<!DOCTYPE html>
<html>
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
.Question {
  position: relative;
  top: 250px;
  left: 825px;
}
.btn-group button:not(:last-child) {
  border-bottom: none;
}

/
.btn-group button:hover {
  background-color: #3e8e41;
}
</style>
<body>
  <div class="Question">
  Here is the balance for your savings account. <?php echo number_format ($_POST["SavingBalance"]); ?>
</div>
<div class="btn-group">
  <a href="ATM Front page.html"><button>Back to main menu</button>

</div>

</body>
</html>
