<?php
include('timer.php');
 ?>

 <!DOCTYPE html>
 <html>

 <title> Transaction Front Page </title>
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

 .btn-group button:not(:last-child) {
   border-bottom: none;
 }

 .btn-group button:hover {
   background-color: #3e8e41;
 }
 </style>
 <body>
 <div class="btn-group">
   <a a href="CheckOrSavingWith.html"><button>Withdraw</button>

     <a a href="CheckOrSavingDepo.html"><button>Deposit</button>

     <a a href="BalanceCheckOrSavings.html"><button>Check Balance</button>
       <form action="http://localhost/SuccessfulWithdraw.php" method="post">
     <button name="QuickDraw" type="number" value="20" >Quick Withdraw From Checking</button>
   </form>
     <a href="ATMChoices.html"><button>Exit</button>

     <a href="TransferChoice.html"><button>Transfer Balance</button>
 </div>

 </body>
 </html>
