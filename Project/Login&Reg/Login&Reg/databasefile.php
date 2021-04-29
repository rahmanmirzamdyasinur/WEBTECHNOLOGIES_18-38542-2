<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName= "noman";
$conn = mysqli_connect($servername, $username, $password,$dbName);

   


   // sql to create table
$sql = "CREATE TABLE faculty (
  userid VARCHAR(30)  PRIMARY KEY,
  username VARCHAR(30) NOT NULL,
  email VARCHAR(30) NOT NULL,
  gender VARCHAR(30) NOT NULL,
  userpassword VARCHAR(30) NOT NULL,
  dateofbirth VARCHAR(30) NOT NULL,
  depertment VARCHAR(30)NOT NULL,
  salary INT(6) NOT NULL,
  activestatus VARCHAR(30) NOT NULL )";
     if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();


    /* $sql = "CREATE TABLE assignecourses  (
    cname VARCHAR(30) NOT NULL, 
    tname VARCHAR(30) NOT NULL,
    tid INT(10) PRIMARY KEY,
    sid VARCHAR(30) NOT NULL )";
    $res = $conn->query($sql);//execute query
    if($res){ echo "table created successfully"; }
    else{ echo "error occurred create "; } 



   $qry = "CREATE TABLE courses (
   cname VARCHAR(30) NOT NULL,
   cid VARCHAR(30) PRIMARY KEY )";
   $res = $conn->query($qry);//execute query
   if($res){ echo "table created successfully"; }
  else{ echo "error occurred create "; }



  $qry = "CREATE TABLE student (
  sid INT(6)  PRIMARY KEY,
   sname VARCHAR(30) NOT NULL )";
   $res = $conn->query($qry);//execute query
   if($res){ echo "table created successfully"; }
   else{ echo "error occurred create "; }

   $qry = "CREATE TABLE teacher (
   tname VARCHAR(30) NOT NULL,
   tid VARCHAR(30) PRIMARY KEY )";
   $res = $conn->query($qry);//execute query
   if($res){ echo "table created successfully"; }
  else{ echo "error occurred create "; }
   
    
$qry = "CREATE TABLE StaffReg (
id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fname VARCHAR(30) NOT NULL,
lname VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
cpassword VARCHAR(30) NOT NULL,
gender VARCHAR(30) NOT NULL,
DOB VARCHAR(30) NOT NULL  )";
 $res = $conn->query($qry);//execute query
    if($res){ echo "table created successfully"; }
    else{ echo "error occurred create "; } */


   
    ?>