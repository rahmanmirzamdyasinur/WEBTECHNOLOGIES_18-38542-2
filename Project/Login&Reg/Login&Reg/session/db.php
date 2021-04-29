<?php
class db{
function OpenCon(){
$servername = "localhost";
$username = "root";
$password = "";
$dbName= "noman";
$conn = mysqli_connect($servername, $username, $password,$dbName) or die("Connect failed: %s\n". $conn -> error);
return $conn;}

function CheckUser($conn,$table,$username,$password){
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
return $result; }
function UpdateUser($conn,$table,$username,$fname,$email)
{
    $sql = "update $table SET fname='$fname', email='$email' WHERE username='$username'";

   if ($conn->query($sql) === TRUE) {
       $result= "Record updated successfully";
   } else {
       $result= "Error updating record: " ;
   }
   return $result;
}
/*function insertUser($conn,$fname, $lname, $email, $username, $password ,$cpassword , $gender, $DOB){
$stmt=$conn->prepare("insert into staffreg(fname,lname,email,username,password,cpassword,gender,DOB) values(?,?,?,?,?,?,?,?)") or die(mysqli_error($conn));
$stmt->bind_param("ssssssss",$fname,$lname,$email,$username,$password,$cpassword,$gender,$DOB) or die(mysqli_error($conn));
$stmt->execute();
echo "<h3>Registration Successful!</h3>";
$stmt->close();}*/

function insertUser($conn,$fname, $lname, $email, $username, $password ,$cpassword , $gender, $DOB){
    $result=$conn->query("insert into SellerReg(fname,lname,email,username,password,cpassword,gender,DOB) values('$fname','$lname','$email','$username','$password','$cpassword','$gender','$DOB')") or die(mysqli_error($conn));
        return $result;
        echo "<h3>Registration Successful!</h3>";}

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
