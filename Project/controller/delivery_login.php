<?php
	sleep(4);

	include_once('../model/db_function.php');
    session_start();
    
    if (isset($_POST['submit'])) {

        if (empty($_POST['id']) || empty($_POST['pass'])) {
            echo"Please fill out all the fields"; 
        }
        else{
            $f=0;
			$id=$_POST['id'];
			$pass=$_POST['pass'];

			$data = login_delivery($id);

			// print_r($data);
			// echo $data['password'];

			
				if ($data['id']==$id and $data['pass']==$pass) {
					$f=1;
					$_SESSION['nam']=$data['name'];
					$_SESSION['id']=$data['id'];
				}
			
			
			if($f==1){
				$_SESSION['flag'] = true;
				$name=$_POST['username'];
				
				header('location: ../view/delivery_dashboard.php');
				//header('location: ../controller/delivery_schedule.php');
			}
			else{
				echo"invaild user";
			}
        }
    }

?>