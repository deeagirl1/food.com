<?php
require('handlers/isSessionValid.php');
?>
<section>
<link rel="stylesheet" href="css/myaccount.css">
<div class="container">
<form action="handlers/changePassword.php" method="post" id="accountForm">

    <h1>Change password</h1>
    <hr>
    <label for="psw"><b>Current Password</b></label>
    <input type="password" placeholder="Current Password" name="psw" id="psw" required>
    <br></br>
    <label for="new-psw"><b>New Password</b></label>
    <input type="password" placeholder="New Password" name="new-psw" id="new-psw" required>

    <label for="psw-repeat"><b>Repeat New Password</b></label>
    <input type="password" placeholder="Repeat New Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <button type="Change" class="passwordbtn">Change your password</button>
</form>
</div>
</section>
<script src="js/changePassword.js"></script>