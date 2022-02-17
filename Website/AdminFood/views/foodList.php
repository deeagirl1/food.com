<?php
require('handlers/isSessionValid.php');
?>
<link rel="stylesheet" href="css/restaurantList.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 

<div class = container>
<form method="post" action="handlers/addProduct.php" id="productContainer">
    <button type="submit" class="addbtn">Add</button>
    <label for="Name"><b>Name of food</b></label>
    <input type="text" placeholder="Enter food name" name="Name" id="Name" required>

    <label for="Description"><b>Description</b></label>
    <input type="text" placeholder="Enter food description" name="Description" id="Description" required>
    
    <label for="Price"><b>Price</b></label>
    <input type="text" placeholder="Enter food price" name="Price" id="Price" required>
</form>

</div>
<script src ="js/addProduct.js"></script>
<?php
require('views/printers/showFood.php');
?>
</section>
<script src="js/removeProduct.js"></script>
<script src="js/returnProduct.js"></script>