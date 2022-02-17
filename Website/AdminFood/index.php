<?php
require('handlers/isSessionValid.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
<script src="https://kit.fontawesome.com/219e700986.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="header">

  <h1><a href ="index.php" style = "text-decoration: none; color: white">#food.com</a></h1>
  <p>Administration side </p>

</div>


<div class="wrapper">

      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
       
      <nav id="sidebar">
    
        <ul class="list-items">
          <li><a href="index.php?page=orders"><i class="fas fa-utensils"></i>Orders</a></li>
          <br>
          <li><a href="index.php?page=logout"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
        </ul>
      </nav>
</div>



<?php 
            $requestedPage = 'views/foodList.php';
            if(isset($_GET['page']))
            {
                switch ($_GET['page']) {
                    case 'orders':
                        $requestedPage = 'views/orders.php';
                        break;
                    case 'logout':
                        $requestedPage = 'handlers/logout.php';
                        break;         
                }
            } 
            require $requestedPage;   
?>        


</body>
</html>