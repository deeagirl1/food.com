<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/login.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
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
</div>
<script src="js/login.js"></script>
</body>
</html>
