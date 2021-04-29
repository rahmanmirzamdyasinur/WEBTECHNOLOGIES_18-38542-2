<?php
session_start(); 
include('session/db.php');
include('session/updatecheck.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: SellerLogin.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br/>Your Profile Page.

<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"sellerreg",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {
    echo "<form action='' method='post'>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      echo "firstname : <input type='text' name='fname' value=".$row["fname"]." > <br>";
      echo "email : <input type='text' name='email' value=".$row["email"]." ><br>";
     
    }
    echo   "<input name='update' type='submit' value='Update'>";
  } else {
    echo "0 results";
  }



?>





<a href="session/logoutcheck.php">logout</a>

</body>
</html>