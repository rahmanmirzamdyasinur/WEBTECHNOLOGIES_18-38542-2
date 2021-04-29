<?php
	session_start();
	if(!isset($_SESSION['flag'])){
		header('location: delivery_login.html');
	}
    $name=$_SESSION['nam'];


   // header('location: ../controller/teacher_class_schedule.php');
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $name ?></title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <td align="center" width="550px"><h2><img src="../assets/logo.png" width="40px" height="60px" alt=""> AtoZ.com</h2></td>
            <td width="400px" align="center"><h3><b>Welcome <a href="delivery_profile.php"><?php echo $name ?></a></b></h3> </td>
            <td align="center"><a href="../view/delivery_dashboard.php">Home</a> | <a href=" ">Notifications</a> | <a href="../view/delivery_settings.php">password change | <a href="../controller/delivery_logout.php">Logout</a></a></td>
        </tr>
        <tr height=600px>
            <td style="font-size: large;">
                <ul>
                    <li>
                        Information
                        <ul>
                             <ul>
                            <li><a href="../view/delivery_upload.php">upload files</a></li>
                        </ul>
                            <li><a href="../view/delivery_edit_information.php">Information Update</a></li>
                            <li><a href="../view/search_delivery2.php"><li>Delivery Man Information Search </li></a></li>
                             <li><a href="../view/delivery_uplaod.php">All Delivery Man Information</a></li>
                        </ul>
                    </li>
                    <li>
                        Attendence
                        <ul>
                           
                            <li><a href="../view/delivery_attendance_view.php">View Attendance</a></li>
                   
            
                </ul>
            </td>
            <td align="center" colspan="2">