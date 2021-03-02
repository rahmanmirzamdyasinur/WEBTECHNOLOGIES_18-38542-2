<?php
    session_start();

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $uname=$_POST['uname'];
        $pass=$_POST['pass'];
        $cPass=$_POST['cPass'];
        $gender=$_POST['gender'];
        $date=$_POST['date'];
        $month=$_POST['month'];
        $year=$_POST['year'];

        if (empty($name) || empty($email) || empty($uname) || empty($pass) || empty($gender) || 
            empty($date) || empty($month) || empty($year)) {
            
            echo"please fill out all the field<br>";
        }
        else{
            if($pass == $cPass){
                echo"Signup Complete<br>";
                $_SESSION['uname']=$uname;
                $_SESSION['pass']=$pass;
                $_SESSION['email']=$email;
                $_SESSION['name']=$name;
                $_SESSION['date']=$date;
                $_SESSION['month']=$month;
                $_SESSION['year']=$year;
                $_SESSION['gender']=$gender;

                header('location: login.php');
            }
            else{
                echo"password and confirm pass doesn't match<br>";
            }
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
                <form method="post" action="">
                    <fieldset>
                        <legend><b>REGISTRATION</b></legend>
                        <table border="0">
                            <tr>
                                <td>Name</td>
                                <td>:
                                    <input type="text" name="name" id="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:
                                    <input type="email" name="email" id=""><button title="sample@example.com"><b> i</b></button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>User Name</td>
                                <td>:
                                    <input type="text" name="uname" id="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:
                                    <input type="password" name="pass" id="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td>:
                                    <input type="password" name="cPass" id="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Gender</legend>
                                        <input type="radio" name="gender" value="Male" id="">Male
                                        <input type="radio" name="gender" value="Female" id="">Female
                                        <input type="radio" name="gender" value="Other" id="">Other
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Date Of Birth</legend>
                                        <input type="tel" name="date" id=""  size="1"> /
                                        <input type="tel" name="month" id="" size="1"> /
                                        <input type="tel" name="year" id=""  size="1"> <i>(dd/mm/yy)</i>
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Submit">
                                    <input type="reset" value="reset">
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