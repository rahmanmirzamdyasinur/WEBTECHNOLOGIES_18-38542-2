<?php
	session_start();
	if(!isset($_SESSION['flag'])){
		header('location: login.html');
	}
    $name = $_SESSION['name'];
    //$id = $_SESSION['id'];
    //echo "Hello ".$name;
    //echo $id;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <header>
        <img src="../assets/logo.PNG" alt="logo" style="width:110px;height:55px;">
        <article style="text-align: right;">
        <a href="../home.html">Home</a>
        <a href="profile.php">Profile</a>
        <a href="../controller/logout.php">Log out</a>
        </article>
        <h3 style="text-align: center;">Welcome <?php echo $name?></h3><br>
    </header>

    <section style="text-align: center; padding:60px;">
        <a href="upload.php">Upload something new!</a><br><br>
        <a href="uploadHistory.php">Previous uploads</a><br><br>
        <a href="userList.php">All users</a><br><br>
        <a href="productList.php">All available products</a><br><br>
        <a href="transactionList.php">All transactions</a><br><br>
    </section>

    <footer style="text-align: center; padding:50px;">
            <p>Copyright 2021</p>
    </footer>
</body>