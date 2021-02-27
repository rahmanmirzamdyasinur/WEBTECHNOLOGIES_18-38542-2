<?php 
    if (isset($_POST['submit'])) {
        $name=$_POST['name'];
        $pass=$_POST['pass'];

        if (preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $name) && strlen($name)>=2 ) {
           
            if ( strpos($pass, '@') || strpos($pass, '#') || strpos($pass, '$') || strpos($pass, '%') && $pass<8){
                echo $name."<br>";
                echo $pass;
            }
            else {
                echo "must contain 8 char and contain at least one of the special characters (@, #, $, %)";
            }
        }
        else {
            echo"must contain alpha numeric and '_' and contain atleat 2 character";
        }

    }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 400px;">
            <legend><h2>Login</h2></legend>

            <label for="uname">User Name : </label>
            <input type="text" name="name">
            <br>
            <br>

            <label for="password">Password: </label>
            <input type="password" name="pass">
            <br>
            <br>

            <hr>

            <input type="checkbox"><label for="">Remember Me</label>
            <br>
            <br>
            

            <input type="submit" name="submit"> <a href="forgotPass.html" target="_blank">Forgot Password?</a>
            <br>
        </fieldset>
    </form>
</body>
</html>
© 2021 GitHub, Inc.