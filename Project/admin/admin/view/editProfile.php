<?php
    session_start();
    if(!isset($_SESSION['flag'])){
        header('location: login.html');
    }

    include_once('../model/db_function.php');
    
    $id = $_SESSION['id'];
    $data = admin_data($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit your profile</title>
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
    	<form method="POST" action="../controller/editProfile.php" enctype="multipart/form-data">
    		<!-- Change photo: <input type="file" name="fileToUpload" id="fileToUpload"><br><br> -->
	        Your current name : <?php echo $data["name"]?><br><br>
	        Enter your new name : <input type="text" name="newName" id="newName"><br><br>
	        Your current email : <?php echo $data["email"]?><br><br>
	        Enter your new email : <input type="text" name="newEmail" id="newEmail"><br><br>
	        Enter your new password : <input type="Password" name="newPassword" id="newPassword"><br><br>
	        Retype your new password : <input type="Password" name="confirmPassword" id="confirmPassword"><br><br>
	        Enter your current password to proceed : <input type="Password" name="password" id="password"><br><br>
	        <input type="submit" value="Confirm Change" name="submit"><br>
	    </form>
    </section>

    <footer style="text-align: center; padding:50px;">
            <p>Copyright 2021</p>
    </footer>
</body>
</html>