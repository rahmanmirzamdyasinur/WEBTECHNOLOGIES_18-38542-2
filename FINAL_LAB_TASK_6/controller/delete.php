<?php 
    require('../model/db_connect.php');
    $id=$_GET['id'];

    $sql="delete from user where ID='$id'";
	mysqli_query($con, $sql);

    header('location: ../view/user_list.php');
?>