<?php
session_start();
?>
<!DOCTYPE html>
<html>
<style>
.btn-group button {
  background-color: green;
  border: 3px solid #999999;
  border-radius: 5px;
  color: white;
  margin: 8px;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.Question {
  position: relative;
  text-align: center;
}
.btn-group button:not(:last-child) {
  border-bottom: none;
}


.btn-group button:hover {
  background-color: #3e8e41;
}
</style>
<body>
  <div class="Question">
  <?php echo 'Savings Account Balance: $' .$_SESSION["SavingsAccount"].'<br>'; ?>
</div>
<div class="btn-group">
  <a href="ATM Front page.html"><button>Back to main menu</button>

</div>

</body>
</html>
