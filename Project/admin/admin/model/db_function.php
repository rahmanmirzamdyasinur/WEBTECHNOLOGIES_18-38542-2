<?php
    require_once("../model/db_connection.php");

    function login($email)
    {
        $conn_status=db_connect();
        $sql="select * from admin where email='{$email}'";
        $result=mysqli_query($conn_status, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function add_admin($admin)
    {
        
        $conn_status=db_connect();
        
        $sql="INSERT INTO admin (`name`, `email`, `username`, `password`) VALUES ('{$admin['adname']}', '{$admin['email']}', '{$admin['username']}', '{$admin['pass']}')";
        
        $result=mysqli_query($conn_status, $sql);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    function admin_data($id)
    {
        $conn_status=db_connect();
        $sql="select * from admin where id='{$id}' ";
        $result=mysqli_query($conn_status, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function change_name($id, $newName)
    {
        $conn_status=db_connect();
        $sql = "UPDATE admin SET `name`='{$newName}' WHERE id='{$id}'";
        $result=mysqli_query($conn_status, $sql);
        
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    function change_email($id, $newEmail)
    {
        $conn_status=db_connect();
        $sql = "UPDATE admin SET `email`='{$newEmail}' WHERE id='{$id}'";
        $result=mysqli_query($conn_status, $sql);
        
        if($result){
            return true;
        }
        else{
            return false;
        }
    }
    
    function change_password($id, $newPassword)
    {
        $conn_status=db_connect();
        $sql = "UPDATE admin SET `password`='{$newPassword}' WHERE id='{$id}'";
        $result=mysqli_query($conn_status, $sql);
        
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    /*function upload_picture()
    {
        $target_dir = "../assets/uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } 
        else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        //size check
        if ($_FILES["fileToUpload"]["size"] > 4000000) {
            echo "File size should not be more than 4 mb.";
            $uploadOk = 0;
        }

        //format check
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
        {
            echo "Sorry, only JPG, JPEG, PNG files are allowed.";
            $uploadOk = 0;
        }

        //show image
        //$filepath = "images/" . $_FILES["fileToUpload"]["name"];
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir) && $uploadOk==1) 
        {
            //echo "<img src=".$_FILES["fileToUpload"]["name"]." height=200 width=300 />";
            echo "Picture changed!";
        } 
        else 
        {
            echo "Error !!";
        }
    }*/
?>