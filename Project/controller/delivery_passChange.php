<?php
sleep(4);

    include_once('../model/db_function.php');

    if (isset($_POST['submit'])) {
        if (empty($_POST['id'] || $_POST['newP'])) {
            echo"fields cannot be empty";
        }
        else{
            $id=$_POST['id'];
            $new_pass=$_POST['newP'];

            $error=false;
            if(strlen($new_pass)<6){
                echo "password must contain at least 6 charecters <br>";
                $error=true;
            }
            if(!strpos($new_pass, '0') and !strpos($new_pass, '1') and !strpos($new_pass, '2') and !strpos($new_pass, '3') and !strpos($new_pass, '4') and !strpos($new_pass, '5') and !strpos($new_pass, '6') and !strpos($new_pass, '7') and !strpos($new_pass, '8') and !strpos($new_pass, '9')){
                echo "password must contain atleast one number  <br>";
                $error=true;
            }

            elseif($error==false){
                $result=passChange($id,$new_pass);
                if ($result==true) {
                    header('location: delivery_logout.php');
                }
            }
        
        }

    }

?>