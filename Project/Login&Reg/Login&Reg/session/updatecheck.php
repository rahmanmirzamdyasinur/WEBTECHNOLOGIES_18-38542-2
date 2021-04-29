<?php



 $error="";

if (isset($_POST['update'])) {
if (empty($_POST['fname']) || empty($_POST['email'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"sellerreg",$_SESSION["username"],$_POST['fname'],$_POST['email']);

echo $userQuery;
$connection->CloseCon($conobj);

}
}


?>
