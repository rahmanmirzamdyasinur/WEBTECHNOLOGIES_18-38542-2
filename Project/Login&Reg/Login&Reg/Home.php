<?php
session_start();
if(empty($_SESSION["username"]))
{
  header("location: SellerLogin.php");
}
?> 
<!DOCTYPE html>
<html>
<body>
<h1>Welcome to AtoZ</h1>
<a href="profile.php"> My Profile </a><br><br><br>
<a href="pupdate.php"> My Profile Update </a><br><br><br>
<?php include 'footer/footer.php';?>
<h5>Do you want to  <a href="session/logoutcheck.php">log out?</a></h5>
</body>
</html>