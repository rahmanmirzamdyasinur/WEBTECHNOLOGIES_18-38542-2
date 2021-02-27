<?php 
    if (isset($_POST['submit'])){
        $oldpass=$_POST['oldPass'];
        $newpass=$_POST['newPass'];
        $cpass=$_POST['confirmPass'];

        if ($oldpass!=$newpass && $newpass==$cpass) {
            echo"successfully changed";
        }
        else{
            echo"new pass sholdnot be the same as the current pass";
        }
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend><h2>CHANGE Password</h2></legend>

            <label for="cpassword">Current Password : </label>
            <input type="text" name="oldPass"><br>
            <br>

            <label for="npassword" style="color: green;">New Password : </label>
            <input type="text" name="newPass"><br>
            <br>

            <label for="rpassword" style="color: red;">Retype New Password</label>
            <input type="text" name="confirmPass"><br>
            <br>    
            <hr>

            <input type="submit" name="submit">
        </fieldset>
    </form>
</body>
</html>
