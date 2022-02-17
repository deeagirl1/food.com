<?php
require('handlers/isSessionValid.php');
?>
<sector>
<link rel="stylesheet" href="css/shoppingcart.css">
</div>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
   <div class="col-25">
    <div class="container">
      <?php
      require('printers/showShoppingCart.php');
      ?>   
    </div>
  </div>
  


  <div class ="btn">
  <class="button" style="text-decoration: none; color: white" id="btnPay">Pay</a>
  </div>

</div>
</sector>
<script src="js/processOrder.js"></script>