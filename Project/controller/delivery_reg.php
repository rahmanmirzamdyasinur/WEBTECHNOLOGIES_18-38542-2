<?php 
  sleep(5);
    include_once('../model/db_function.php');
    
    if(isset($_POST['submit'])){
        if(empty($_POST['name']) || empty($_POST['id']) || empty($_POST['email']) || 
            empty($_POST['phone']) || empty($_POST['gender']) || empty($_POST['desig']) || 
            empty($_POST['address']) || empty($_POST['bloodGroup']) || empty($_POST['pass']) || 
            empty($_POST['cPass']) || empty($_POST['dob']) || empty($_POST['qualification'] || 
            empty($_POST['profilepic']))){
            echo"Plaese fill out all the field <br>";
        }
        else{ 

            $target_file = basename($_FILES["profilepic"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "only jpeg, jpg & png files are allowed. <br>";
            }
            elseif($_FILES["profilepic"]["size"] > 4194304) {
                echo "Picture is too large.<br>";
                echo" Picture size should not be more than 4MB <br>";
              }
            else{
                $name= $_POST['name'];
                $id=$_POST['id'];
                $desig=$_POST['desig'];
                $email= $_POST['email'];
                $bloodGroup=$_POST['bloodGroup'];
                $phone = $_POST['phone'];
                $address=$_POST['address'];
                $pass = $_POST['pass'];
                $cPass=$_POST['cPass'];
                $dob=$_POST['dob'];
                $gender=$_POST['gender'];
                move_uploaded_file($_FILES['profilepic']['tmp_name'],'../assets/'.$_FILES['profilepic']['name']);
                $profilePic='../assets/'.$_FILES['profilepic']['name'];
                $bloodGroop=$_POST['bloodGroup'];
                $qualification=$_POST['qualification'];

                $delivery= ['name'=> $name, 
                            'id'=>'D'.$id, 
                            'desig'=>$desig,
                            'email'=> $email, 
                            'bloodGroup'=> $bloodGroup , 
                            'gender'=>$gender , 
                            'phone'=>$phone, 
                            'address'=>$address, 
                            'pass'=>$pass, 
                            'cPass'=>$cPass, 
                            'dob'=>$dob, 
                            'profilePic'=>$profilePic, 
                            'qualification'=>$qualification 
                            ];
                
                //validation check 2
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
                if(strlen($phone)<11 || strlen($phone)>11 ){
                    echo "phone no. must contain 11 digit <br>";
                    $error=true;
                }
                if(strlen($pass)<6){
                    echo "password must contain at least 6 charecters <br>";
                    $error=true;
                }
                if(!strpos($pass, '0') and !strpos($pass, '1') and !strpos($pass, '2') and 
                    !strpos($pass, '3') and !strpos($pass, '4') and !strpos($pass, '5') and 
                    !strpos($pass, '6') and !strpos($pass, '7') and !strpos($pass, '8') and 
                    !strpos($pass, '9')){
                    echo "password must contain atleast one number  <br>";
                    $error=true;
                }
                
                if ($pass!=$cPass) {
                    echo"please check your password and confirm password<br>";
                    $error=true;
                }

                elseif($error==false){
                    $result=add_delivery($delivery);

                    if($result==true){
                        header('location: ../view/delivery_login.html');
                    }
                    else{
                        echo "database connection error";
                    }
                }

            }
            
        }
    }

?>