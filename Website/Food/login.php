<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
<link rel="stylesheet" href="css/login.css">

</head>
<body>

<div class="header">
  <h1>#food.com</h1>
  <p>We deliver your order very fast!</p>
</div>



<div class="container">
<form action="handlers/loginCheck.php" method="post" id="loginForm">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="text" placeholder="Password" name="psw" id="psw" required>

    <button type="submit">Login</button>
</form>
<hr>

<button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="handlers/registerAccount.php" method="post" id = "registerForm">
    

    <div class="container">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="firstName"><b>First Name</b></label>
    <input type="text" placeholder="Enter your first name" name="firstName" id="firstName" >
    <div id="error">
    <p id="message1" name="message">Error Message</p>
    </div>
    <br>
    <label for="lastName"><b>Last Name</b></label>
    <input type="text" placeholder="Enter your last name" name="lastName" id="lastName" >
    <div id="error">
    <p id="message2" name="message">Error Message</p>
    </div>
    <br>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter your email" name="email" id="email" required >
    <br>
    <br>
    <br>
    <label for="Street"><b>Street</b></label>
    <input type="text" placeholder="Enter your street" name="street" id="street" >
    <div id="error">
    <p id="message4" name="message">Error Message</p>
    </div>
    <br>
    <label for="Street No."><b>Street No.</b></label>
    <input type="text" placeholder="Enter your street no." name="streetnr" id="streetnr" >
    <div id="error">
    <p  id="message5" name="message">Error Message</p>
    </div>
    <br>
    <label for="Zipcode"><b>Zipcode</b></label>
    <input type="text" placeholder="Enter your zipcode" name="zipcode" id="zipcode" >
    <div id="error">
    <p id="message6" name="message">Error Message</p>
    </div>
    <br>
    <label for="City"><b>City</b></label>
    <input type="text" placeholder="Enter your city" name="city" id="city" >
    <div id="error">
    <p  id="message7" name="message">Error Message</p>
    </div>
    <br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <div id="error">
    <p  id="message8" name="message">Error Message</p>
    </div>
    <br>
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw-repeat"required >
    <div id="error">
    <p  id="message9" name="message">Error Message</p>
    </div>
    <br>
    <hr>

    <button type="submit" class="registerbtn">Register</button>
    <br>
    <br>

    </div>
  </form>
</div>
</div>
<script src ="js/script.js"></script>
<script src="js/login.js"></script>
<script src="js/register.js"></script>

</body>
</html>
