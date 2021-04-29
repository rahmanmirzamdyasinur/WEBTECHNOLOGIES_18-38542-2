<?php
include('session/logincheck.php');

if(isset($_SESSION['username'])){
header("location: Home.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<script>
function validateForm() {
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if (username == "") {
alert("Enter your username");
return false;
}
if (password.length < 4 ) {
alert("Enter your password");
return false;
}
}
</script>

<h1>Seller Login</h1>
<form action="" method="post"  onsubmit="return validateForm()">
<input type="text"  id="username" name="username" placeholder="Enter your username!"><?php echo $usernameerror; ?><br><br>
<input type="password" id="password" name="password" placeholder="Enter your password!" ><?php echo $passworderror; ?><br><br>
<input name="submit" type="submit" value="Login"><br>
<input type="reset"><br><br>
<a href="Account.php">Back to Account</a><br>
</form>
<br>
</body>
</html>