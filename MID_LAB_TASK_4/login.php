<?php 
    session_start();

    if(isset($_POST['submit'])){
        if(empty($_POST['uname']) || empty($_POST['pass'])){
            echo"field cannot be empty";
        }
        else if($_SESSION['uname']==$_POST['uname'] && $_SESSION['pass']==$_POST['pass'] ){
           # echo"success";
           $_SESSION['flag']=true;
           header('location: dashboard.php');
            
        }
        else{
            echo"wrong user_name & password<br>.";
        }
    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <table border="0" width="100%">
        <tr>
            <td width="550px"><img src="file/logo.png" alt=""></td>
            <td width="400px"> </td>
            <td align="center"><a href="home.php">Home</a> | <a href="login.php">Login | <a href="registration.php">Registration</a></a></td>
        </tr>
        <tr>
            <td></td>
            <td  height="600px" align="center">
                <form method="post"  action="">
                    <fieldset>
                        <legend><b>LOG IN</b></legend>
                        <table>
                            <tr>
                                <td>User Name:</td>
                                <td><input type="text" name="uname"></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="pass"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="checkbox" name="" id="">Remember me
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Submit">
                                    <a href="forgotpass.php"> Forgot Password?</a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
            <td></td>
        </tr>
        <tr>
            <td colspan="3" align="center">Copyright &COPY 2021</td>
        </tr>
    </table>
</body>
</html>
