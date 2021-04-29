<?php
    session_start();
    if(!isset($_SESSION['flag'])){
        header('location: login.html');
    }

    //include('dashboard.php');
    include_once('../model/db_function.php');

    $id = $_SESSION['id'];
    $data = admin_data($id);

    $adName=$data["name"];
    $userName=$data["username"];
    $id=$data['id'];
    $email=$data['email'];
    //echo $id." ".$email;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    <header>
        <img src="../assets/logo.PNG" alt="logo" style="width:110px;height:55px;">
        <article style="text-align: right;">
        <a href="../home.html">Home</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="../controller/logout.php">Log out</a>
        </article>
    </header>

    <section style="text-align: center; padding:60px;">
        <h3>Profile of <?php echo $userName?></h3><br>
        Full name : <?php echo $adName ?><br>
        ID : <?php echo $id ?><br>
        email : <?php echo $email ?> <br><br>
        <a href="editProfile.php">Edit profile</a>
    </section>

    <footer style="text-align: center; padding:50px;">
            <p>Copyright 2021</p>
    </footer>
</body>