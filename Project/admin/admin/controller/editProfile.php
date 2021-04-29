<?php
	session_start();
    if(!isset($_SESSION['flag'])){
        header('location: login.html');
    }
    
    $id = $_SESSION['id'];

	include_once('../model/db_function.php');
	//include_once('../view/editProfile.php');

	if(isset($_POST['submit']))
	{
		if(empty($_POST['password']))
		{
			echo "Enter your current password";
		}
		else
		{
			if(!empty($_POST['newName'])){
				$newName = $_POST['newName'];
				if(change_name($id, $newName))
					echo "Name changed!";
				else
					echo "Name change error!";
			}

			if(!empty($_POST['newEmail'])){
				$newEmail = $_POST['newEmail'];
				if(change_email($id, $newEmail))
					echo "Email changed!";
				else
					echo "Email change error!";
			}

			if(!empty($_POST['newPassword'])){
				if(empty($_POST['confirmPassword']) || $_POST['newPassword']!=$_POST['confirmPassword'])
					echo "Please retype your new password. It must match with New Password";
				else
				{
					$newPassword = $_POST['newPassword'];
					if(change_password($id, $newPassword))
						echo "Password changed!";
					else
						echo "Password change error!";
				}
			}
		}
	}
?>