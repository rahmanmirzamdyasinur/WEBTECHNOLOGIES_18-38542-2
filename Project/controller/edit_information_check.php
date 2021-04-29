<?php 
    session_start();
    require_once('../model/db_function.php');

    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $id=$_SESSION['id'];
                $email= $_POST['email'];
                $phone = $_POST['phone'];
                $gender=$_POST['gender'];
                $designation=$_POST['desig'];
                $address=$_POST['address'];
                $bloodgroop=$_POST['bloodGroup'];
                $dob=$_POST['dob'];
                $qualification=$_POST['qualification'];
                move_uploaded_file($_FILES['profilePic']['tmp_name'], '../assets/'.$_FILES['profilePic']['name']);
                $profilePic='../assets/'.$_FILES['profilePic']['name'];
        if (isset($_POST['display'])) {
            $display=1;
        }
        else{
            $display=0;
        }

        $delivery=[
                            'name'=> $name, 
                            'id'=>'T'.$id,
                            'email'=> $email,
                            'phone'=>$phone,
                            'gender'=>$gender ,
                            'desig'=>$designation,
                            'address'=>$address,
                            'bloodGroup'=> $bloodGroop , 
                            'dob'=>$dob,
                            'qualification'=>$qualification, 
                            'profilePic'=>$profilePic, 
                            
                    ];

        $result=editdeliveryByID($delivery);

        if ($result) {
            header('location: ../view/delivery_profile.php');
        }
        else{
            echo"error";
        }
    }

?>