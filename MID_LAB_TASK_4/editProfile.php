
<?php 
    session_start();

    if (isset($_POST['submit'])) {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['gender']) ||
            empty($_POST['date']) ||  empty($_POST['month']) ||  empty($_POST['year'])){
            
                echo"field cannot be empty";
        }
        else{
            echo"updated successfully";
            $_SESSION['name']=$_POST['name'];
            $_SESSION['email']=$_POST['email'];
            $_SESSION['gender']=$_POST['gender'];
            $_SESSION['date']=$_POST['date'];
            $_SESSION['month']=$_POST['month'];
            $_SESSION['year']=$_POST['year'];

        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home --Welcome--</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <td><img src="file/logo.png" alt=""></td>
            <td width="600px"> </td>
            <td align="center">Logged in as <a href=""><?php echo $_SESSION['name']; ?></a> | <a href="logout.php">Logout</a></td>
        </tr>
        <tr >
            <td >
                <b><h2>Account</h2></b>
                <hr>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="profile.php">View Profile</a></li>
                    <li><a href="editProfile.php">Edit Profile</a></li>
                    <li><a href="picture_change.php">Change Profile Picture</a></li>
                    <li><a href="changePass.php">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </td>
            <td colspan="2" rowspan="2">  
                <fieldset>
                    <legend><b><h2>EDIT PROFILE</h2></b></legend>
                    <form method="post"action="">
                        <table border="0" width="100%">
                            <tr>
                                <td>Name</td>
                                <td>: <input type="text" name="name"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>: <input type="email" name="email" id=""><button title="sample@example.com"><b> i</b></button></td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td>:
                                    <input type="radio" name="gender" value="Male" id="">Male
                                    <input type="radio" name="gender" value="Female" id="">Female
                                    <input type="radio" name="gender" value="Other" id="">Other

                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>
                                    Date of Birth
                                </td>
                                <td>
                                <input type="tel" name="date" id=""  size="1"> /
                                <input type="tel" name="month" id="" size="1"> /
                                <input type="tel" name="year" id=""  size="1"><i> (dd/mm/yy)</i>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="submit" value="Submit"></td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td  height="390px"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">Copyright &COPY 2021</td>
        </tr>
    </table>
</body>
</html>