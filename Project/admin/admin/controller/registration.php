<?php
    include_once('../model/db_function.php');

    if(isset($_POST['submit'])){
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['gender']) || 
        empty($_POST['password']) || empty($_POST['dob']) || empty($_POST['userName']) || 
        empty($_POST['confirmPassword']))
        {
            echo"Plaese fill out all the field <br>";
        }
        else
        {
            $name= $_POST['name'];
            $email= $_POST['email'];
            $pass = $_POST['password'];
            $confirmPass = $_POST['confirmPassword'];
            $userName = $_POST['userName'];
            $dob=$_POST['dob'];
            $gender=$_POST['gender'];

            $admin = ['adname'=> $name,
                      'email'=> $email,
                      'username'=> $userName,
                      'pass'=>$pass
                     ];

            $error=false;
            $temp_dob=explode('-', $dob);

            if ($temp_dob[0]>2000) {
                echo"Please select Birth year before 2000. <br>";
                $error=true;
            }
            if(strlen($name)<3){
                echo "name must contain at least 3 charecters<br>";
                $error=true;
            }
            if(strpos($name, '!') || strpos($name, '@') || strpos($name, '#') || 
                    strpos($name, '%') || strpos($name, '&')){
                    echo "name cannot contain any special charecter<br>";
                    $error=true;
            }
            if(strlen($pass)<5){
                echo "password must contain at least 5 characters <br>";
                $error=true;
            }
            if ($pass!=$confirmPass) {
                echo"password and confirm password does not match<br>";
                $error=true;
            }

            if(!$error)
            {
                $result=add_admin($admin);

                if($result==true){
                    header('location: ../view/login.html');
                }
                else{
                    echo "database connection error";
                }
            }
        }
    }
?>