<?php
    include_once('../model/db_function.php');
    session_start();

    if (isset($_POST['submit'])) {

        if (empty($_POST['email']) || empty($_POST['password']))
        {
            echo "Please fill out all the fields";
        }
        else{
            $f=0;
			$email=$_POST['email'];
			$password=$_POST['password'];

			$data = login($email);
			
            if ($data['email']==$email and $data['password']==$password) {
                $f=1;
                $_SESSION['name']=$data['name'];
                $_SESSION['id']=$data['id'];
                $_SESSION['email']=$data['email'];
            }
			
			
			if($f==1){
				$_SESSION['flag'] = true;
				$name=$data['name'];
				echo "Log in successful";
				header('location: ../view/dashboard.php');
			}
			else{
				echo"Invaild user";
			}
        }
    }

?>
?>